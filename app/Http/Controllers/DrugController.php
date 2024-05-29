<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Phpml\Classification\NaiveBayes;
use App\Http\Requests\DrugStorerequest;

class DrugController extends Controller
{
    public function index()
    {
        $drugs = Drug::paginate(50);
        return view('drugs.index', compact('drugs'));
    }

    public function create()
    {
        return view('drugs.create');
    }

    public function store(DrugStorerequest $request)
    {

        $validatedData = $request->validated();

        Drug::create($validatedData);

        return redirect()->route('drugs.index')
            ->with('success', 'Data obat berhasil ditambahkan.');
    }

    public function createModelForm()
    {
        return view('create_model');
    }

    public function createModel(Request $request)
    {
        $classifier = new NaiveBayes();

        // Mengambil data dari model Drug
        $data = Drug::all()->toArray();

        // Membagi data menjadi set pelatihan dan set pengujian (80% untuk pelatihan, 20% untuk pengujian)
        $totalData = count($data);
        $trainingData = collect($data)->random(intval(0.8 * $totalData));
        $testingData = collect($data)->except($trainingData->keys()->toArray());

        $samples = [];
        $labels = [];

        foreach ($trainingData as $row) {
            $samples[] = [
                strval($row['age']),
                strval($row['sex']),
                strval($row['blood_pressure']),
                strval($row['cholesterol']),
                strval($row['na_to_k_ratio'])
            ];
            $labels[] = $row['drug_type'];
        }

        $classifier->train($samples, $labels);

        // Simpan model di session
        session(['naive_bayes_model' => $classifier]);

        return redirect()->route('drugs.index')->with('success', 'Model berhasil dibuat dan dilatih.');
    }

    public function predictForm()
    {
        return view('predict_form');
    }

    public function predict(Request $request)
    {
        $instance = [
            strval($request->age),
            strval($request->sex),
            strval($request->blood_pressure),
            strval($request->cholesterol),
            strval($request->na_to_k_ratio)
        ];

        // Ambil model dari session
        $classifier = session('naive_bayes_model');

        if ($classifier) {
            $predictedDrugType = $classifier->predict([$instance]);
            return view('predict_result', ['predictedDrugType' => $predictedDrugType]);
        } else {
            return redirect()->back()->with('error', 'Anda harus membuat dan melatih model terlebih dahulu sebelum melakukan prediksi. Silakan <a href="/drugs">klik di sini</a> untuk kembali ke halaman obat.');

        }
    }





    public function update(DrugStoreRequest $request, Drug $drug)
    {
        $validatedData = $request->validated();
        $drug->update($validatedData);


        return redirect()->route('drugs.index')
            ->with('success', 'Data obat berhasil diperbarui.');
    }

    public function destroy(Drug $drug)
    {
        $drug->delete();

        return redirect()->route('drugs.index')
            ->with('success', 'Data obat berhasil dihapus.');
    }

    public function uploadForm()
    {
        return view('upload_form');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:10000'
        ]);

        $file = $request->file('file');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $file_name);

        $data = array_map('str_getcsv', file(public_path('uploads/' . $file_name)));

        unset($data[0]);

        foreach ($data as $row) {
            Drug::create([
                'age' => $row[0],
                'sex' => $row[1],
                'blood_pressure' => $row[2],
                'cholesterol' => $row[3],
                'na_to_k_ratio' => $row[4],
                'drug_type' => $row[5]
            ]);
        }

        return redirect()->back()->with('success', 'Data berhasil diunggah.');
    }
}

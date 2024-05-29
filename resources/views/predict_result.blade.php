@extends('layouts.AuthLayouts')

@section('isi')
    <div class="container" style="margin-bottom: 102px ;margin-top:100px;">
        <h2 class="text-center">Hasil Prediksi Jenis Obat</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group mt-3">
                    <li class="list-group-item active">Prediksi jenis obat:</li>
                    @foreach ($predictedDrugType as $prediction)
                        <li class="list-group-item fw-bold">{{ $prediction }}</li>
                    @endforeach
                    <li class="list-group-item text-end">
                    <a href="{{route('predict_form')}}" class="btn btn-primary">Cek Lagi</a>

                    </li>
                </ul>
            </div>




        </div>

    </div>
@endsection

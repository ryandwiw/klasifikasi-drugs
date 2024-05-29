@extends('layouts.AuthLayouts')

@section('isi')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-center mt-3 fw-bold">Data Obat</h2>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createdrugs">
            Tambahkan Data Baru
        </button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#unggahdata">
            Unggah Data training
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#latihdata">
            Latih Model Naive Bayes
        </button>
        <a href="{{ route('predict_form') }}">
            <button type="button" class="btn btn-primary">
                Cek Prediksi
            </button>
        </a>


        <!-- Modal -->
        <div class="modal fade" id="unggahdata" tabindex="-1" aria-labelledby="unggahdataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="unggahdataLabel">Unggah Data Latih </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data" class="form">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" class="form-control-file" id="file">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="latihdata" tabindex="-1" aria-labelledby="latihdataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="latihdataLabel">Latih Model Naive Bayes </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('create_model') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Train Model
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="createdrugs" tabindex="-1" aria-labelledby="createdrugsLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createdrugsLabel">Entry New Instance</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('drugs.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>

                            <div class="form-group">
                                <label for="sex">Sex:</label>
                                <select class="form-control" id="sex" name="sex" required>
                                    <option value="F">Female</option>
                                    <option value="M">Male</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="blood_pressure">Blood Pressure:</label>
                                <select class="form-control" id="blood_pressure" name="blood_pressure" required>
                                    <option value="HIGH">High</option>
                                    <option value="NORMAL">Normal</option>
                                    <option value="LOW">Low</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cholesterol">Cholesterol:</label>
                                <select class="form-control" id="cholesterol" name="cholesterol" required>
                                    <option value="HIGH">High</option>
                                    <option value="NORMAL">Normal</option>
                                    <option value="LOW">Low</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="na_to_k_ratio">Na to K Ratio:</label>
                                <input type="text" class="form-control" id="na_to_k_ratio" name="na_to_k_ratio"
                                    pattern="[0-9]+(\.[0-9]+)?" title="Please enter a valid number" required>
                            </div>

                            <div class="form-group">
                                <label for="drug_type">Drug Type:</label>
                                <select class="form-control" id="drug_type" name="drug_type" required>
                                    <option value="drugX">DrugX</option>
                                    <option value="DrugY">DrugY</option>
                                    <option value="drugA">DrugA</option>
                                    <option value="drugC">DrugC</option>
                                    <option value="drugB">DrugB</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="table-responsive mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tekanan Darah</th>
                        <th>Kolesterol</th>
                        <th>Na to K Ratio</th>
                        <th>Jenis Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drugs as $drug)
                        <tr>
                            <td>{{ $drug->id }}</td>
                            <td>{{ $drug->age }}</td>
                            <td>{{ $drug->sex }}</td>
                            <td>{{ $drug->blood_pressure }}</td>
                            <td>{{ $drug->cholesterol }}</td>
                            <td>{{ $drug->na_to_k_ratio }}</td>
                            <td>{{ $drug->drug_type }}</td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#updateDrugs{{ $drug->id }}"
                                    class="btn btn-primary">Edit</a>
                                <form action="{{ route('drugs.destroy', $drug->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="updateDrugs{{ $drug->id }}" tabindex="-1"
                            aria-labelledby="updateDrugsLabel{{ $drug->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateDrugsLabel{{ $drug->id }}">Edit Drug</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('drugs.update', $drug->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group row mt-3 mb-3">
                                                <label for="age"
                                                    class="col-md-4 col-form-label text-md-right">Age</label>

                                                <div class="col-md-6">
                                                    <input id="age" type="text" class="form-control"
                                                        name="age" value="{{ $drug->age }}" required autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3 mb-3">
                                                <label for="sex"
                                                    class="col-md-4 col-form-label text-md-right">Sex</label>

                                                <div class="col-md-6">
                                                    <select id="sex" class="form-control" name="sex" required>
                                                        <option value="F" {{ $drug->sex === 'F' ? 'selected' : '' }}>
                                                            Female</option>
                                                        <option value="M" {{ $drug->sex === 'M' ? 'selected' : '' }}>
                                                            Male</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3 mb-3">
                                                <label for="blood_pressure"
                                                    class="col-md-4 col-form-label text-md-right">Blood Pressure</label>

                                                <div class="col-md-6">
                                                    <input id="blood_pressure" type="text" class="form-control"
                                                        name="blood_pressure" value="{{ $drug->blood_pressure }}"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3 mb-3">
                                                <label for="cholesterol"
                                                    class="col-md-4 col-form-label text-md-right">Cholesterol</label>

                                                <div class="col-md-6">
                                                    <input id="cholesterol" type="text" class="form-control"
                                                        name="cholesterol" value="{{ $drug->cholesterol }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3 mb-3">
                                                <label for="na_to_k_ratio"
                                                    class="col-md-4 col-form-label text-md-right">Na to K Ratio</label>

                                                <div class="col-md-6">
                                                    <input id="na_to_k_ratio" type="text" class="form-control"
                                                        name="na_to_k_ratio" value="{{ $drug->na_to_k_ratio }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3 mb-3">
                                                <label for="drug_type" class="col-md-4 col-form-label text-md-right">Drug
                                                    Type</label>

                                                <div class="col-md-6">
                                                    <select class="form-control" id="drug_type" name="drug_type"
                                                        required>
                                                        <option value="DrugX"
                                                            {{ $drug->drug_type === 'DrugX' ? 'selected' : '' }}>DrugX
                                                        </option>
                                                        <option value="DrugY"
                                                            {{ $drug->drug_type === 'DrugY' ? 'selected' : '' }}>DrugY
                                                        </option>
                                                        <option value="DrugA"
                                                            {{ $drug->drug_type === 'DrugA' ? 'selected' : '' }}>DrugA
                                                        </option>
                                                        <option value="DrugC"
                                                            {{ $drug->drug_type === 'DrugC' ? 'selected' : '' }}>DrugC
                                                        </option>
                                                        <option value="DrugB"
                                                            {{ $drug->drug_type === 'DrugB' ? 'selected' : '' }}>DrugB
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">

            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination">
                    @if ($drugs->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $drugs->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $drugs->lastPage(); $i++)
                        <li class="page-item {{ $i == $drugs->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $drugs->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    @if ($drugs->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $drugs->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">Next</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endsection

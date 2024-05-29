<!-- resources/views/drugs/edit.blade.php -->

@extends('layouts.AuthLayouts')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Drug</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('drugs.update', $drug->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control" name="age" value="{{ $drug->age }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sex" class="col-md-4 col-form-label text-md-right">Sex</label>

                                <div class="col-md-6">
                                    <select id="sex" class="form-control" name="sex" required>
                                        <option value="F" {{ $drug->sex === 'F' ? 'selected' : '' }}>Female</option>
                                        <option value="M" {{ $drug->sex === 'M' ? 'selected' : '' }}>Male</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_pressure" class="col-md-4 col-form-label text-md-right">Blood Pressure</label>

                                <div class="col-md-6">
                                    <input id="blood_pressure" type="text" class="form-control" name="blood_pressure" value="{{ $drug->blood_pressure }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cholesterol" class="col-md-4 col-form-label text-md-right">Cholesterol</label>

                                <div class="col-md-6">
                                    <input id="cholesterol" type="text" class="form-control" name="cholesterol" value="{{ $drug->cholesterol }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="na_to_k_ratio" class="col-md-4 col-form-label text-md-right">Na to K Ratio</label>

                                <div class="col-md-6">
                                    <input id="na_to_k_ratio" type="text" class="form-control" name="na_to_k_ratio" value="{{ $drug->na_to_k_ratio }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="drug_type" class="col-md-4 col-form-label text-md-right">Drug Type</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="drug_type" name="drug_type" required>
                                        <option value="DrugX" {{ $drug->drug_type === 'DrugX' ? 'selected' : '' }}>DrugX</option>
                                        <option value="DrugY" {{ $drug->drug_type === 'DrugY' ? 'selected' : '' }}>DrugY</option>
                                        <option value="DrugA" {{ $drug->drug_type === 'DrugA' ? 'selected' : '' }}>DrugA</option>
                                        <option value="DrugC" {{ $drug->drug_type === 'DrugC' ? 'selected' : '' }}>DrugC</option>
                                        <option value="DrugB" {{ $drug->drug_type === 'DrugB' ? 'selected' : '' }}>DrugB</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Drug
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

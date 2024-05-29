@extends('layouts.AuthLayouts')

@section('isi')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Obat Baru</div>

                <div class="card-body">
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
                            <input type="text" class="form-control" id="na_to_k_ratio" name="na_to_k_ratio" pattern="[0-9]+(\.[0-9]+)?" title="Please enter a valid number" required>
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

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
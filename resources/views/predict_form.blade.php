@extends('layouts.AuthLayouts')

@section('isi')
    <div class="container mb-5" style="margin-top: 100px;">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {!! html_entity_decode(session('error')) !!}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Prediksi Drugs</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/predict') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="age">Usia:</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="form-group">
                                <label for="sex">Jenis Kelamin:</label>
                                <select class="form-control" id="sex" name="sex">
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="blood_pressure">Tekanan Darah:</label>
                                <select class="form-control" id="blood_pressure" name="blood_pressure">
                                    <option value="HIGH">High</option>
                                    <option value="NORMAL">Normal</option>
                                    <option value="LOW">Low</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cholesterol">Kolesterol:</label>
                                <select class="form-control" id="cholesterol" name="cholesterol">
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

                            <button type="submit" class="btn btn-primary btn-block mt-3">Prediksi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

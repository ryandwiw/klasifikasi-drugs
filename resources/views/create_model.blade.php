<!-- resources/views/create_model.blade.php -->

@extends('layouts.AuthLayouts')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Model</div>

                    <div class="card-body">
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
    </div>
@endsection

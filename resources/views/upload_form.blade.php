@extends('layouts.AuthLayouts')

@section('isi')
<div class="container">

    <h2 class="mt-2 fw-bold text-center">Unggah Data Latih</h2>

    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="file" name="file" class="form-control-file" id="file">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Unggah</button>
    </form>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</div>
@endsection

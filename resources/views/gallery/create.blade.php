@extends('layouts.app')

@section('title', 'Dodaj zdjęcie do galerii')

@section('content')
<main class="container-fluid">
    
    @include('shared.fail')

    <div class="row text-center py-4">
        <div class="col-12">
            <h1>Dodaj zdjęcie do galerii</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-11 col-md-7 mx-auto border border-pink rounded p-3">
            <div class="text-center">
                <img id="img" src="" alt="no image included" class="d-none rounded img-fluid mb-2 box-shadow">
            </div>
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-center">
                    <label for="image" id="imgBtn" class="btn-sm btn-info btn-label text-light">Dodaj obrazek</label>
                    <input id="image" name="image" type="file" class="d-none">
                    @include('shared.error', ['name' => 'image'])
                </div>
                <div class="form-group text-center mb-0">
                    <button class="btn btn-pink text-light px-4">Zapisz</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

@section('script')
<script src="{{ asset('js/loadImageForm.js') }}"></script>    
@endsection
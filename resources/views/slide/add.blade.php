@extends('layouts.app')

@section('title', 'Dodaj nowy slajd')

@section('content')
<main class="container-fluid">

    @include('shared.fail')

    <div class="row py-4 text-center">
        <div class="col-12">
            <h1 class="mb-0">Dodaj zdjęcie do pokazu slajdów</h1>
        </div>
    </div>

    <div class="row mx-2 mb-3">
        <div class="col-12 col-md-7 mx-md-auto border border-pink rounded p-3">
            <div class="text-center">
                <img id="img" src="" alt="no image included" class="d-none rounded img-fluid mb-2 box-shadow">
            </div>
            <form action="{{ route('slide.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-center">
                    <label for="image" id="imgBtn" class="btn-sm btn-info btn-label text-light">Dodaj zdjęcie</label>
                    <input id="image" name="image" type="file" class="d-none">
                    @include('shared.error')
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
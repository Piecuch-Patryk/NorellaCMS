@extends('layouts.app')
@section('title', 'Dodaj nową ofertę')

@section('content')
<main class="container-fluid">

    <div class="row py-4">
        <div class="col-12 text-center">
            <h1 class="mb-0">Dodaj nową ofertę</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-8 mx-md-auto text-center">
            <img id="img" src="" alt="no image included" class="d-none rounded img-fluid mb-2 box-shadow">
        </div>
        <div class="col-12 col-md-8 mx-md-auto">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-center">
                    <label for="image" id="imgBtn" class="btn-sm btn-info btn-label text-light">Dodaj obrazek</label>
                    <input id="image" name="image" type="file" class="d-none">
                    @include('shared.error', ['name' => 'image'])
                </div>
                <div class="form-group">
                    <input name="title" type="text" class="form-control" value="{{ old('title') }}" placeholder="Podaj tytuł">
                    @include('shared.error', ['name' => 'title'])
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" placeholder="Podaj treść oferty">{{ old('content') }}</textarea>
                    @include('shared.error', ['name' => 'text'])
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="amount" class="input-group-text">Cena</label>
                        </div>
                        <input id="amount" name="amount" value="{{ old('amount') }}" type="text" class="form-control">
                    </div>
                    <div>
                        @include('shared.error', ['name' => 'price'])
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-pink text-light">Dodaj ofertę</button>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection

@section('script')
<script src="{{ asset('js/loadImageForm.js') }}"></script>
<script src="{{ asset('js/bodyHeightFix.js') }}"></script>    
@endsection
@extends('layouts.app')

@section('title', 'Edytuj wybraną ofertę')

@section('content')
<main class="container-fluid">

    <div class="row py-4">
        <div class="col-12 text-center">
            <h1>Edytuj wybraną ofertę</h1>
        </div>
    </div>

    {{-- Form --}}
    <div class="row">
        <div class="col-12">
            <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group text-center">
                    <div class="my-3">
                        <img src="{{ asset('storage/public/products/' . $product->image) }}" id="img" class="img-fluid rounded box-shadow-pink" alt="{{ $product->title }}">
                    </div>
                    <label for="image" class="btn-sm btn-pink btn-label text-light p-2 rounded">Zmień obrazek</label>
                    <input id="image" name="image" type="file" class="d-none">
                    @include('shared.error', ['name' => 'file'])
                </div>
                <div class="form-group">
                    <label for="title">Tytuł</label>
                    <input name="title" type="text" class="form-control" value="{{ (old('title')) ? old('title') : $product->title }}" placeholder="Podaj tytuł">
                    @include('shared.error', ['name' => 'title'])
                </div>
                <div class="form-group">
                    <label for="content">Treść</label>
                    <textarea name="content" class="form-control" rows="5" placeholder="Podaj treść oferty">{{ (old('content')) ? old('content') : $product->content }}</textarea>
                    @include('shared.error', ['name' => 'text'])
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="amount" class="input-group-text">Cena</label>
                    </div>
                    <input id="amount" name="amount" value="{{ (old('amount')) ? old('amount') : $product->amount }}" type="text" class="form-control">
                    @include('shared.error', ['name' => 'price'])
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success font-weight-bold px-4">Zapisz</button>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection

@section('script')
<script src="{{ asset('js/loadImageForm.js') }}"></script>
@endsection
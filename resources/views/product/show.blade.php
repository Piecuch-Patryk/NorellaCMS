@extends('layouts.app')

@section('title')
{{ $product->title }}
@endsection

@section('content')
<main class="container-fluid">

    <div class="row my-5 mx-4 py-lg-3 py-xl-5 border border-pink rounded">
        <div class="col-12 text-center py-2">
            <h2>{{ $product->title }}</h2>
        </div>
        <div class="col-11 col-md-9 col-lg-5 col-xl-3 text-center mx-auto text-center mb-2">
            <img src="{{ asset('storage/public/products/' . $product->image) }}" class="img-fluid rounded box-shadow" alt="{{ $product->title }}">
        </div>
        <div class="col-11 col-md-9 col-lg-5 col-xl-3 mx-auto">
            <p>{{ $product->content }}</p>
            <p class="d-inline-block border-bottom border-pink">{{ $product->amount }} zł</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 py-4 text-center">
            <h1 class="h3 d-inline-block px-2 title-decor">Polecane</h1>
        </div>
    </div>

    @include('shared.product')
    
</main>
@endsection
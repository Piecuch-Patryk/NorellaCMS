@extends('layouts.app')
@section('title', 'Cennik usług')

@section('content')
<main class="container-fluid">

    <div class="row py-4 text-center">
        <div class="col-12">
            <h1 class="mb-0">Aktualny cennik usług Norella</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-8 mx-md-auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nazwa usługi</th>
                        <th>Cena</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr title="więcej">
                        <td class="p-0"><a href="{{ route('product.show', ['product' => $product]) }}" class="d-block text-dark p-3">{{ $product->title }}</a></td>
                        <td class="p-0"><a href="{{ route('product.show', ['product' => $product]) }}" class="d-block text-dark p-3">{{ $product->amount }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</main>
@endsection
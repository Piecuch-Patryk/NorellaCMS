@extends('layouts.app')

@section('title', 'Oferta')

@section('content')
<main class="container-fluid">

    @include('shared.success')
    @include('shared.fail')

    <div class="row pt-4">
        <div class="col-12 col-md-10 mx-md-auto text-center">
            <h1>Zabiegi kosmetyczne Norella</h1>
            <p>Dbamy o to, by klientki mogły u nas odpocząć od trosk dnia codziennego i poczuć, że czas spędzony w salonie jest tylko im poświęcony.</p>
        </div>
    </div>

    @auth
    <div class="row">
        <div class="col py-2 text-center">
            <a href="{{ route('product.create') }}" class="btn btn-success">Dodaj nową ofertę</a>
        </div>
    </div>
    @endauth

    {{-- Products --}}
    @include('shared.product')

</main>
@endsection
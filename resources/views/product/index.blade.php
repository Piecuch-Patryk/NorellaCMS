@extends('layouts.app')

@section('title', 'Oferta')

@section('content')
<main class="container-fluid">
    <div class="row pt-4">
        <div class="col-12 col-md-10 mx-md-auto text-center">
            <h1>Zabiegi kosmetyczne Norella</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ex, in veritatis esse at iusto mollitia voluptas fugiat rem.</p>
        </div>
    </div>
    @auth
    <div class="row">
        <div class="col py-2 text-center">
            <a href="#" class="btn btn-success">Dodaj nową ofertę</a>
        </div>
    </div>
    @endauth
    {{-- Products --}}
    @include('shared.product')
</main>
@endsection
@extends('layouts.app')

@section('title', 'Pokaz slajdów')

@section('content')
<main class="container-fluid">
    
    @include('shared.success')
    @include('shared.fail')

    <div class="row text-center py-4">
        <div class="col-12">
            <h1>Dostosuj pokaz slajdów ze strony głównej</h1>
            <a href="{{ route('slide.add') }}" class="btn btn-success">Dodaj nowy slajd</a>
        </div>
    </div>

    <div class="row justify-content-center px-2">
        @foreach ($slides as $slide)
            <div class="col-12 col-md-5 m-3 p-3 border border-pink rounded">
                <img src="{{ asset('storage/slides/' . $slide->name) }}" class="img-fluid rounded box-shadow" alt="Carousel image">
                <div class=" text-center mt-3">
                <form action="{{ route('slide.destroy', ['slide' => $slide]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Usuń</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</main>
@endsection

@section('script')
<script src="{{ asset('js/bodyHeightFix.js') }}"></script>    
@endsection
@extends('layouts.app')

@section('title', 'Galeria zdjęć')

@section('content')
<main class="container-fluid">
    
    @include('shared.success')
    @include('shared.fail')

    <div class="row text-center">
        <div class="col-12">
            <h1 class="pt-4">Galeria zdjęć</h1>
        </div>
    </div>

    @auth
    <div class="row text-center">
        <div class="col-12">
            <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-success px-3">Dodaj zdjęcie</a>
        </div>
    </div>
    @endauth
    

    <div class="grid">
        <div class="grid-sizer"></div>
        @for ($i = 0; $i < count($images); $i++)
            <div class="grid-item">
                <button type="button" class="btn-bg-none border-0" data-toggle="modal" data-target="#modal{{ $i }}">
                    <img src="{{ asset('storage/gallery/' . $images[$i]->name) }}" class="img-fluid box-shadow-pink" alt="{{ $images[$i]->title }}">
                </button>
                @auth
                <form action="{{ route('gallery.destroy', ['image' => $images[$i]]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger my-2">Usuń zdjęcie</button>
                </form>
                @endauth
            </div>
            {{-- Modal --}}
            <div class="modal fade" id="modal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="modalTitle{{ $i }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                        <img src="{{ asset('storage/gallery/' . $images[$i]->name) }}" class="img-fluid" alt="Zdjęcie w galerii zdjęć.">
                    </div>
                </div>
            </div>
        @endfor
    </div>

</main>
@endsection
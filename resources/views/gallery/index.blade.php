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

    <div class="row d-flex justify-content-center justify-content-sm-around">
        @for ($i = 0; $i < count($images); $i++)
            <div class="col-11 col-sm-5 col-md-3 col-xl-2 mx-md-3 my-3 p-3 bg-pink rounded box-shadow text-center">
                <button type="button" class="btn-bg-none border-0" data-toggle="modal" data-target="#modal{{ $i }}">
                    <figure class="figure m-0">
                        <img src="{{ asset('storage/gallery/' . $images[$i]->name) }}" class="img-fluid rounded" alt="{{ $images[$i]->title }}">
                        <figcaption class="figure-caption text-light mt-3">{{ $images[$i]->title }}</figcaption>
                    </figure>
                </button>
                @auth
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger my-2">Usuń zdjęcie</button>
                </form>
                @endauth
            </div>
            {{-- Modal --}}
            <div class="modal fade" id="modal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="modalTitle{{ $i }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content bg-pink">
                        <div class="modal-header">
                            <h5 class="modal-title ml-md-1" id="modalTitle{{ $i }}">{{ $images[$i]->title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('storage/gallery/' . $images[$i]->name) }}" class="img-fluid" alt="{{ $images[$i]->title }}">
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

</main>
@endsection
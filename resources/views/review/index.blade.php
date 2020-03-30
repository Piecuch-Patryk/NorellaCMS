@extends('layouts.app')

@section('title', 'Komentarze klientów')

@section('content')
<main class="container-fluid">

    @include('shared.success')

    <div class="row py-4 text-center">
        <div class="col-12">
            <h1 class="mb-0">Opinie naszych klientów</h1>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <a href="" class="btn btn-success">Dodaj opinię</a>
        </div>
    </div>

    <div class="row px-2">
        @foreach ($reviews as $review)
            <div class="col-12 col-md-7 mx-md-auto border border-pink rounded my-3 p-3">
                <h2 class="mb-3">{{ $review->name }}</h2>
                <p class="mb-1">{{ $review->content }}</p>
                <p class="mb-1 small text-muted">{{ $review->created_at->format('Y/m/d') }}</p>

                @auth    
                <div class="text-right">
                    <form action="{{ route('review.destroy', ['review' => $review]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Usuń opinię</button>
                    </form>
                </div>
                @endauth

            </div>
        @endforeach
    </div>

</main>
@endsection
@extends('layouts.app')

@section('title', 'Strona główna')

@section('slider')
    @include('slides.index')
@endsection


@section('content')
<main class="container-fluid">
    <div class="row text-center py-3">
        <div class="col-12">
            <h2 class="title-decor">Norella poleca</h2>
        </div>
    </div>
    {{-- Products --}}
    @include('shared.product')
    <div class="row text-center pb-3">
        <div class="col-12">
            <a href="#" class="btn btn-outline-info px-4">Więcej</a>
        </div>
    </div>
    {{-- Slider reviews --}}
    <div class="row my-5">
        <div class="col-12 mb-3 text-center">
            <h2 class="title-decor">Opinie naszych klientów</h2>
        </div>
        <div class="col-12 p-0">
            <div id="carousel_reviews" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class=" px-5 mx-md-5 text-center">
                            <h3 class="mb-3">Title</h3>
                            <p class="mb-1">Content</p>
                            <p class="mb-1 small text-muted">Content2</p>
                        </div>
                        <span id="pauseIcon" class="pause-icon"><i class="far fa-pause-circle"></i></span>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_reviews" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_reviews" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 text-center">
            <a href="#" class="btn btn-outline-info mt-3 px-4">Pokaż wszystkie</a>
        </div>
    </div>
</main>
@endsection
@extends('layouts.app')

@section('title', 'Strona główna')

@section('slider')
<div class="row mb-3 mx-0 carousel-wrap">
    <div class="col-12 p-0">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
                @for ($i = 0; $i < count($slides); $i++)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <div class="slider-image" style="background-image: url({{ asset('storage/slides/' . $slides[$i]->name) }})"></div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    {{-- Page title --}}
    <div class="carousel-cover text-center d-flex flex-column align-items-center justify-content-between py-5">
        <div>
            <h1 class="pt-3">Najlepsze studio urody w Twojej okolicy</h1>
            <ul class="list-unstyled">
                <li>
                    <span class="d-block">Zapraszamy</span>
                    <span class="d-block">Pn-Pt 10:00 - 18:00</span>
                    <span class="d-block">Sobota 10:00 - 13:00</span>
                </li>
                <li>Jana Matejki 9, 47-220 Kędzierzyn-Koźle</li>
            </ul>
            <p class="d-none d-sm-block h-5 my-0 mx-sm-5 px-sm-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident ad atque earum repudiandae culpa suscipit? Minima consequuntur explicabo modi a quas tenetur repudiandae, similique sunt totam.</p>
        </div>
        <a href="tel:+4832321221" class="btn-lg btn-pink text-light box-shadow">Umów się na wizytę</a>
    </div>
</div>
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
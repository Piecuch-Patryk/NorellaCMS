@extends('layouts.app')

@section('title', 'Strona główna')

@section('slider')
<div class="row mx-0 carousel-wrap">
    <div class="col-12 p-0">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
                @for ($i = 0; $i < count($slides); $i++)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <div class="slider-image" style="background-image: url({{ asset('storage/public/slides/' . $slides[$i]->name) }})"></div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Page title --}}
    <div class="carousel-cover text-center d-flex flex-column align-items-center justify-content-between py-5">
        <div>
            <h1 class="pt-3 title-decor">Najlepsze studio urody w Twojej okolicy</h1>
            <p class="d-none d-md-block my-0 mx-sm-5 px-sm-5 py-5 header-subtitle">
                Studio urody NORELLA to wyjątkowe miejsce w którym zadbamy o twój idealny wygląd. Przytulne, nastrojowe wnętrze i delikatna muzyka pozwolą Ci się wyciszyć, odpocząć od codziennego intensywnego tempa i skupić na swoich potrzebach. Dzięki pasji i długoletnim szkoleniom oferujemy Państwu profesjonalne usługi kosmetyczne na najwyższym poziome.
            </p>
            <ul class="list-unstyled py-3">
                <li>
                    <span class="d-block">Zapraszamy</span>
                    <span class="d-block">Pn-Pt 10:00 - 18:00</span>
                    <span class="d-block">Sobota 10:00 - 13:00</span>
                </li>
                <li>Jana Matejki 9, 47-220 Kędzierzyn-Koźle</li>
            </ul>
        </div>
        <a href="tel:+4832321221" class="btn-lg btn-pink text-light box-shadow d-md-none">Umów się na wizytę</a>
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
    <div class="row text-center py-3">
        <div class="col-12">
            <a href="{{ route('product.index') }}" class="btn btn-outline-info px-4">Więcej</a>
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
                    @for ($i = 0; $i < count($reviews); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <div class=" px-5 mx-md-5 text-center">
                            <h3 class="mb-3">{{ $reviews[$i]->name }}</h3>
                            <p class="mb-1">{{ $reviews[$i]->content }}</p>
                            <p class="mb-1 small text-muted">{{ $reviews[$i]->created_at->format('Y/m/d') }}</p>
                        </div>
                        <span id="pauseIcon" class="pause-icon"><i class="far fa-pause-circle"></i></span>
                    </div>
                    @endfor
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
            <a href="{{ route('review.index') }}" class="btn btn-outline-info mt-3 px-4">Pokaż wszystkie</a>
        </div>
    </div>

</main>
@endsection
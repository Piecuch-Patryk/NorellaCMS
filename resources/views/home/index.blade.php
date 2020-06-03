@extends('layouts.app')

@section('title', 'Strona główna')

{{-- Header --}}
@section('header')
    <header class="header--home text-center container-fluid position-sticky sticky-top d-flex flex-column justify-content-center text-light px-sm-5">
        <div class="bg--color"></div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 px-3 text-md-left mt-md-5">
                <h1 class="mb-4 mb-md-5 mb-xl-3">Twoje Studio Urody</h1>
                <p class="mb-4 mb-md-5">Dzięki pasji i długoletnim szkoleniom oferujemy Państwu profesjonalne usługi kosmetyczne na najwyższym poziome.</p>
                <a href="{{ route('product.index') }}" class="btn btn-light font-weight-bold">Nasza Oferta</a>
            </div>
            <div class="position-absolute header--sentence m-0 pb-3">
                <p class="m-0">Pozwól sobie na chwilę relaksu.</p>
                <a href="tel:+48239234854" class="text-white d-md-none">Umów wizytę</a>
            </div>
        </div>
        <aside class="header--aside d-none position-absolute d-lg-flex flex-column justify-content-center align-items-start text-center text-pink">
            <div class="w-100 my-2">
                <h6 class="h5 m-0 text-dark">Zapraszamy</h6>
                <p class="m-0">Pn-Pt 10:00 - 18:00</p>
                <p class="m-0">Sobota 10:00 - 13:00</p>
            </div>

            <div class="w-100 my-2">
                <h6 class="h5 m-0 text-dark">Umów wizytę</h6>
                <p class="m-0">+48 639 382 902</p>
            </div>
            <div class="w-100 my-2">
                <h6 class="h5 m-0 text-dark">Lokalizacja</h6>
                <p class="m-0">Jana Matejki 9</p>
                <p class="m-0">Kędzierzyn-Koźle</p>
                <p class="m-0">47-220</p>
            </div>
            <div class="w-100">
                <a href="" class="btn btn-sm btn-primary py-0">Facebook</a>
            </div>
        </aside>
    </header>
@endsection

{{-- Main --}}
@section('content')
<main class="main--content container-fluid mx-0 position-relative">

    {{-- Logos --}}
    <aside class="row pr-lg-5">
        <ul class="d-flex justify-content-center justify-content-lg-around align-items-center w-100 p-0 py-5 m-0">
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/depilax.png') }}" class="w-100" alt="Depilax logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/farmona.jpg') }}" class="w-100" alt="Farmona logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/mollon.jpg') }}" class="w-100" alt="Mollon pro logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/norel.png') }}" class="w-100" alt="Norel - dr Wilsz logo"></li>
        </ul>
    </aside>

    {{-- Products --}}
    <div class="row overflow--x--hidden">
        <div class="col-12 text-center text-md-left">
            <h2 class="title--decor position-relative d-inline-block py-3 mb-0 text-pink">Norella Poleca</h2>
        </div>
    </div>

    @foreach ($categories as $category)
    @if ($loop->first)
    {{-- category - 1 --}}
    <div class="row category--wrap category--1 py-5 mt-3 d-lg-flex">
        <div class="col-12 col-md-7 col-lg-6 mx-md-auto mx-lg-0 text-center bg--lg--img--1">
            <h3 class="h5 text-light bg-pink py-3 px-4 rounded mt-5 mb-0 mr-lg-5">{{ $category['category_title'] }}</h3>
            <ul class="p-0 py-5 pt-lg-3">
                @foreach ($products as $product)
                @if ($product->category_id == $category['id'] && $product->featured)

                <li class="d-flex flex-row align-items-center bg-light rounded py-3 px-4 mb-5">
                    <div class="text-left position-relative list--decor">
                        <h4 class="h5 my-0">{{ $product->title }}</h4>
                        <p class="m-0">{{ $product->desc }}</p>
                    </div>
                    <div class="pl-1 text-pink">
                        {{ $product->price }} zł
                    </div>
                </li>

                @endif
                @endforeach
            </ul>
        </div>
    </div> 
    
    <div class="row sticky--section sticky-top">
        <div class="col-12 col-md-7 col-lg-5 mx-md-auto text-center py-5 px-2">
            <p class="m-0 main--sentence py-lg-5">Dbamy o to, by klientki mogły u nas odpocząć od trosk dnia codziennego i poczuć, że czas spędzony w salonie jest tylko im poświęcony.</p>
        </div>
    </div>

    @else
    
    {{-- category - 2 --}}
    <div class="row position-relative category--wrap category--2 py-5">
        <div class="col-12 col-md-7 col-lg-6 mx-md-auto mr-lg-0 text-center bg--lg--img--2">
            <h3 class="h5 text-light bg-pink py-3 px-4 rounded mt-5 mb-0">{{ $category['category_title'] }}</h3>
            <ul class="p-0 py-5 ml-lg-auto mr-lg-0">
                @foreach ($products as $product)
                @if ($product->category_id == $category['id'] && $product->featured)

                <li class="d-flex flex-row align-items-center bg-light rounded py-3 px-4 mb-5">
                    <div class="text-left position-relative list--decor">
                        <h4 class="h5 my-0">{{ $product->title }}</h4>
                        <p class="m-0">{{ $product->desc }}</p>
                    </div>
                    <div class="pl-1 text-pink">
                        {{ $product->price }} zł
                    </div>
                </li>

                @endif
                @endforeach
            </ul>
        </div>
    </div>

    @endif
    @endforeach

    <div class="row">
        <div class="col-12 px-0">
            <div class="bottom--btn pb-3 text-md-center py-lg-5">
                <div class="d-lg-flex flex-lg-row justify-content-lg-center align-items-center">
                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-pink px-4 ml-5 mb-3 mx-lg-5">Zobacz wszystkie</a>
                    <p class="d-none d-lg-inline-block mx-lg-5 text-primary">+48 639 243 932</p>
                </div>
                <div class="d-sm-none">
                    <a href="tel:+48948338229" class="btn btn-sm btn-pink ml-5">Umów się na wizytę</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Slider reviews --}}
    <div class="comments--section row position-relative overflow--x--hidden py-5">
        <div class="col-12 mb-5 text-center">
            <h2 class="title--decor position-relative d-inline-block py-3 mb-0 text-pink">Opinie Naszych Klientów</h2>
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
            <a href="{{ route('review.index') }}" class="btn btn-sm btn-pink mt-5">Pokaż Wszystkie</a>
        </div>
    </div>

</main>
@endsection


@section('script')
<script src="{{ asset('js/navigation.js') }}">
    
</script>
@endsection
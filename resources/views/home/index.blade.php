@extends('layouts.app')

@section('title', 'Strona główna')

{{-- Header --}}
@section('header')
    <header class="header--home text-center container-fluid position-sticky sticky-top d-flex flex-column justify-content-center text-light">
        <div class="bg--color"></div>
        <div class="row">
            <div class="col-12 px-3">
                <h1 class="h3 mb-4">Twoje Studio Urody</h1>
                <p class="mb-4">Dzięki pasji i długoletnim szkoleniom oferujemy Państwu profesjonalne usługi kosmetyczne na najwyższym poziome.</p>
                <a href="{{ route('product.index') }}" class="btn btn-light">Nasza Oferta</a>
            </div>
            <div class="position-absolute header--sentence">
                <p>Pozwól sobie na chwilę relaksu.</p>
            </div>
        </div>
    </header>
@endsection

{{-- Main --}}
@section('content')
<main class="main--content container-fluid mx-0 position-relative">

    {{-- Logos --}}
    <aside>
        <div class="row bg-pink text-center text-light">
            <div class="col-12 px-0">
                <h2 class="h5 position-relative py-4 mb-0">Korzystamy z najlepszych kosmetyków na rynku</h2>
            </div>
        </div>
        <div class="row">
        <ul class="d-flex justify-content-center align-items-center w-100 p-0 pt-5 pb-3 m-0">
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/depilax.png') }}" class="w-100" alt="Depilax logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/farmona.jpg') }}" class="w-100" alt="Farmona logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/mollon.jpg') }}" class="w-100" alt="Mollon pro logo"></li>
            <li class="flex--list--item m-3"><img src="{{ asset('storage/assets/home-page/logos/norel.png') }}" class="w-100" alt="Norel - dr Wilsz logo"></li>
        </ul>
    </aside>

    {{-- Products --}}
    <div class="row overflow--x--hidden">
        <div class="col-12 text-center">
            <h2 class="title--decor position-relative d-inline-block py-3 mb-0 text-pink">Norella Poleca</h2>
        </div>
    </div>
    
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


@section('script')
<script src="{{ asset('js/navigation.js') }}">
    
</script>
@endsection
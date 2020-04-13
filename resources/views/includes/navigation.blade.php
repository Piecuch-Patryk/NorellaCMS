<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-pink px-1 box-shadow">
    <a href="{{ route('home.index') }}">
        <img src="{{ asset('storage/assets/logo/norella.png') }}" class="logo" alt="Norella logo">
    </a>
    <a href="tel:+48792888984" class="text-light text-underline d-lg-none mr-4">+48 792 888 984</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav text-center d-md-flex justify-content-center w-100 pt-xs-4">
            <li class="nav-item {{ Route::is('home.index') ? 'active' : '' }}">
                <a class="nav-link mx-md-3" href="{{ route('home.index') }}">Strona Główna</a>
            </li>
            <li class="nav-item {{ Route::is('product.index') ? 'active' : '' }}">
                <a class="nav-link mx-md-3" href="{{ route('product.index') }}">Oferta</a>
            </li>
            <li class="nav-item {{ Route::is('product.showprice') ? 'active' : '' }}">
                <a class="nav-link mx-md-3" href="{{ route('product.showprice') }}">Cennik</a>
            </li>
            <li class="nav-item {{ Route::is('review.index') ? 'active' : '' }}">
                <a class="nav-link mx-md-3" href="{{ route('review.index') }}">Opinie</a>
            </li>
            <li class="nav-item {{ Route::is('gallery.index') ? 'active' : '' }}">
                <a class="nav-link mx-md-3" href="{{ route('gallery.index') }}">Galeria</a>
            </li>
            <li class="nav-item {{ Route::is('about.index') ? 'active' : '' }}">
                <a class="nav-link mx-md-3" href="{{ route('about.index') }}">O nas</a>
            </li>
            {{-- Admin only --}}
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link mx-md-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('slide.index') }}">Pokaz slajdów</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Wyloguj
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endauth
        </ul>
    </div>
</nav>
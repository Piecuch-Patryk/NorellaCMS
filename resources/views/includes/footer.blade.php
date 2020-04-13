<footer class="container-fluid pt-4 px-4 mt-3 mx-0 text-center bg-pink box-shadow">
    <div class="row">

        <div class="col-12 pb-3">
            <h6 class="h5 text-dark">Do zobaczenia w salonie :)</h6>
        </div>

        <div class="col-12 col-md-8 mx-md-auto">
            <ul class="list-unstyled d-flex flex-wrap justify-content-around footer-menu">
                <li><a href="{{ route('home.index') }}" class="d-block px-2 mx-2 my-1 text-light">strona główna</a></li>
                <li><a href="{{ route('product.index') }}" class="d-block px-2 mx-2 my-1 text-light">oferta</a></li>
                <li><a href="{{ route('product.showprice') }}" class="d-block px-2 mx-2 my-1 text-light">cennik</a></li>
                <li><a href="{{ route('review.index') }}" class="d-block px-2 mx-2 my-1 text-light">opinie</a></li>
                <li><a href="{{ route('gallery.index') }}" class="d-block px-2 mx-2 my-1 text-light">galeria</a></li>
                <li><a href="{{ route('about.index') }}" class="d-block px-2 mx-2 my-1 text-light">o nas</a></li>
            </ul>
        </div>

        <div class="col-12">
            <p class="mb-2">Wszelkie prawa zastrzeżone &commat; Norella</p>
            <p class="m-0 text-muted small"><a href="https://patrykpiecuch.pl" class="text-muted">Created by Patryk Piecuch</a></p>
        </div>
        
    </div>
</footer>
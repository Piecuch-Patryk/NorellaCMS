<footer class="footer container-fluid position-relative text-center bg-white">
    <div class="row position-relative footer--bg py-5">
        <div class="col-4 col-lg-2 text-center py-3 py-lg-5">
            <h6 class="h5 text-white">Nawigacja</h6>
            <ul class="list-unstyled h-75 m-0 d-flex flex-column justify-content-around">
                <li><a href="{{ route('home.index') }}" class="text-white">główna</a></li>
                <li><a href="{{ route('product.index') }}" class="text-white">oferta</a></li>
                <li><a href="{{ route('product.showprice') }}" class="text-white">cennik</a></li>
                <li><a href="{{ route('review.index') }}" class="text-white">opinie</a></li>
                <li><a href="{{ route('gallery.index') }}" class="text-white">galeria</a></li>
                <li><a href="{{ route('about.index') }}" class="text-white">o nas</a></li>
            </ul>
        </div>

        <div class="col-8 col-lg-10 d-flex flex-column justify-content-center flex-lg-row text-center text-white py-lg-5">
            <div class="w-100 my-2">
                <h6 class="h3 m-0 text-dark">Zapraszamy</h6>
                <p class="m-0">Pn-Pt 10:00 - 18:00</p>
                <p class="m-0">Sobota 10:00 - 13:00</p>
            </div>

            <div class="w-100 my-2">
                <h6 class="h3 m-0 text-dark">Umów wizytę</h6>
                <p class="m-0">+48 639 382 902</p>
            </div>
            <div class="w-100 my-2">
                <h6 class="h3 m-0 text-dark">Lokalizacja</h6>
                <p class="m-0">Jana Matejki 9</p>
                <p class="m-0">Kędzierzyn-Koźle</p>
                <p class="m-0">47-220</p>
            </div>
            <div class="w-100 my-2">
                <a href="" class="btn btn-sm btn-primary px-5">Facebook</a>
            </div>
        </div>

        <div class="water--mark"></div>
    </div>

    <div class="row py-5">
        <div class="col-12">
            <h6 class="h4 text-pink">Do zobaczenia w salonie!</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p class="m-0 text-muted small">Wszelkie prawa zastrzeżone &commat; Norella</p>
            <p class="m-0 text-muted small"><a href="https://patrykpiecuch.pl" class="text-muted">Created by Patryk Piecuch</a></p>
        </div>
    </div>
</footer>
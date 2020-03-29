<div class="row d-flex justify-content-center">
    <div class="col-11 col-md-8 col-lg-3 col-xl-2 mx-lg-3 my-3 p-3 bg-pink rounded box-shadow">
        <div class="text-center">
            <img src="#" class="img-fluid rounded-lg" alt="Zdjęcie produktu">
        </div>
        <div class="product-bg p-2 mt-3 rounded">
            <h3 class="py-2 text-center">Title</h3>
            <p>Name</p>
            <p class="text-center">Amount zł</p>
        </div>
        {{-- Auth --}}
        @auth
        <div class="d-flex justify-content-around pt-2">
            <a href="#" class="btn btn-sm btn-info btn-shadow-light px-3">Edytuj</a>
            <form action="#" method="POST" class="d-inline-block ml-5 btn-shadow-light">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger px-3">Usuń</button>
            </form>
        </div>
        @endauth
    </div>
</div>
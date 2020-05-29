<div class="row category--wrap category--1 py-5 my-3">
    <div class="col-12 text-center">
        <h3 class="h5 text-light bg-pink py-3 px-4 rounded mt-5 mb-0">Zabiegi kosmetyczne na twarz</h3>
        <ul class="p-0 py-5">
            <li class="d-flex flex-row align-items-center bg-light rounded py-3 px-4 mb-5">
                <div class="text-left position-relative list--decor">
                    <h4 class="h5 my-0">Oczyszczanie twarzy</h4>
                    <p class="m-0">Peeling, oczyszczanie, maska rozpulchniająca, ampułka, maska kremowa</p>
                </div>
                <div class="pl-1 text-pink">
                    70zł
                </div>
            </li>
            <li class="d-flex flex-row align-items-center bg-light rounded py-3 px-4 mb-5">
                <div class="text-left position-relative list--decor">
                    <h4 class="h5">Oczyszczanie twarzy</h4>
                    <p class="m-0">Peeling, oczyszczanie, maska rozpulchniająca, ampułka, maska kremowa</p>
                </div>
                <div class="pl-1 text-pink">
                    70zł
                </div>
            </li>
            <li class="d-flex flex-row align-items-center bg-light rounded py-3 px-4 mb-5">
                <div class="text-left position-relative list--decor">
                    <h4 class="h5">Oczyszczanie twarzy</h4>
                    <p class="m-0">Peeling, oczyszczanie, maska rozpulchniająca, ampułka, maska kremowa</p>
                </div>
                <div class="pl-1 text-pink">
                    70zł
                </div>
            </li>
        </ul>
    </div>
</div>

{{-- <div class="grid">
    @foreach ($products as $product)
    <div class="grid-item">
        <div class="card box-shadow-pink">
            <img class="card-img-top" src="{{ asset('storage/products/' . $product->image) }}" alt="Zdjęcie produktu">
    
            <div class="card-body">
                <h5 class="card-title text-center">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->content }}</p>
                <p class="card-text">{{ $product->amount }} zł</p>
    
                @auth
                <div class="d-flex justify-content-around pt-2">
                    <a href="{{ route('product.edit', ['product' => $product, 'id' => $product]) }}" class="btn btn-sm btn-info btn-shadow-light px-3">Edytuj</a>
                    <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST" class="d-inline-block ml-5 btn-shadow-light">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger px-3">Usuń</button>
                    </form>
                </div>
                @endauth 
    
            </div>
        </div>
    </div>
    @endforeach

</div> --}}
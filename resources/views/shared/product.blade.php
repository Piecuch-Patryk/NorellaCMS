<div class="row d-flex justify-content-center">
    
    @foreach ($products as $product)
    <div class="col-11 col-md-8 col-lg-3 col-xl-2 mx-lg-3 my-3 p-3 bg-pink rounded box-shadow">

        <div class="text-center">
            <img src="{{ asset('storage/products/' . $product->image) }}" class="img-fluid rounded-lg" alt="Zdjęcie produktu">
        </div>

        <div class="product-bg p-2 mt-3 rounded">
            <h3 class="py-2 text-center">{{ $product->title }}</h3>
            <p>{{ $product->content }}</p>
            <p class="text-center">{{ $product->amount }} zł</p>
        </div>

        {{-- Auth --}}
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
    @endforeach

</div>
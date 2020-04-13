<div class="row grid">
    <div class="grid-sizer"></div>
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

</div>

@section('script')
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry-init.js') }}"></script>
@endsection
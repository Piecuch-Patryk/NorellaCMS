@extends('layouts.dashboard')

@section('content')
    
<main class="container">

    <section class="row">
        <div class="col-12">
            <h2 class="d-flex justify-content-between align-items-center">Kategorie <a href="" class="btn btn-sm btn-primary">Dodaj kategorię</a></h2>
        </div>
        
        @foreach ($categories as $category)
        <div class="col-12 my-3 p-3 border-bottom border-info">
            <h3>{{ $category->category_title }}</h3>            
            <p class="text-muted m-0">Dodane: {{ $category->created_at }}</p>
            <p class="text-muted">Edytowane: {{ $category->updated_at }}</p>

            <div>
                <p>Wyróżnione na stronie głównej: <span class="font-weight-bold">{{ $category->featured != 0 ? 'Tak' : 'Nie'}}</span></p>
            </div>

            <a href="" class="btn btn-sm btn-outline-info">Edytuj</a>
            <a href="" class="btn btn-sm btn-outline-danger">Usuń</a>
        </div>
        @endforeach

    </section>

    <section class="row">
        <div class="col-12">

        </div>
    </section>

</main>


@endsection
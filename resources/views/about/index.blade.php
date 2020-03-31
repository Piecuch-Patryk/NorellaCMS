@extends('layouts.app')

@section('title', 'O nas')

@section('content')
<main class="container-fluid">
    <div class="row py-4">

        <div class="col-12 col-md-8 mx-md-auto text-center">
            <h1>Kilka słów o nas</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae earum odio eum. Fuga eius fugit maiores iste omnis asperiores vitae dolore, recusandae hic quae labore necessitatibus ullam similique nisi!</p>
        </div>

        <div class="col-12 col-md-6 mx-md-auto">
            <ul class="list-unstyled list-group text-center">
                <li class="list-group-item border-0 mb-2 text-primary">
                    <span class="d-inline-block">Zapraszamy</span>
                    <span class="d-block">Pn-Pt 10:00 - 18:00</span>
                    <span class="d-block">Sobota 10:00 - 13:00</span>
                </li>
                <li class="list-group-item border-pink mb-2 text-primary">Jana Matejki 9, 47-220 Kędzierzyn-Koźle</li>
                <li class="list-group-item border-pink mb-2"><a href="tel:+48726222990">+48 726 222 990</a></li>
                <li class="list-group-item border-pink mb-2"><a href="">Lokalizacja - mapy google</a></li>
            </ul>
        </div>
        
    </div>
</main>
@endsection
@extends('layouts.app')

@section('title', 'O nas')

@section('content')
<main class="container-fluid">
    <div class="row py-4">

        <div class="col-12 col-md-8 mx-md-auto text-center">
            <h1>Kilka słów o nas</h1>
            <p>
                Studio urody Norella to wyjątkowe miejsce, w którym do każdego podchodzimy indywidualnie. W swojej pracy cenimy przede wszystkim profesjonalizm. U nas możesz odetchnąć, odprężyć się i odzyskać energię. Dzięki naszej profesjonalnej obsłudze dowiesz się, jakie zabiegi i produkty pielęgnacyjne będą dla Ciebie najlepsze.
            </p>
        </div>

        <div class="col-12 col-md-6 mx-md-auto">
            <ul class="list-unstyled list-group text-center">
                <li class="list-group-item border-0 mb-2 text-primary">
                    <span class="d-inline-block">Zapraszamy</span>
                    <span class="d-block">Pn-Pt 10:00 - 18:00</span>
                    <span class="d-block">Sobota 10:00 - 13:00</span>
                </li>
                <li class="list-group-item border-pink mb-2"><a href="tel:+48792888984">+48 792 888 984</a></li>
                <li class="list-group-item border-pink mb-2"><a href="https://www.google.com/maps/place/Jana+Matejki+9,+47-220+K%C4%99dzierzyn-Ko%C5%BAle/@50.3406809,18.2020646,15z/data=!4m5!3m4!1s0x471111768f08a3ad:0xb82f25f44db8763c!8m2!3d50.3439744!4d18.2096928" target="_blank">Jana Matejki 9, 47-220 Kędzierzyn-Koźle</a></li>
            </ul>
        </div>
        
    </div>
</main>
@endsection
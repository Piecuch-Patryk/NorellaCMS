@extends('layouts.app')

@section('title', 'Dodaj opinię')

@section('content')
<main class="container-fluid">

    <div class="row py-4">
        <div class="col-12">
            <h1 class="text-center py-2">Twoja opinia ma dla nas znaczenie!</h1>
        </div>
    </div>

    <div class="row px-2 mb-5">
        <div class="col-12 col-md-7 mx-md-auto border border-pink rounded px-3 py-5">
            <form action="{{ route('review.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="podaj imię">
                    @include('shared.error', ['name' => 'name'])
                </div>
                <div class="form-group">
                    <textarea name="content" id="content" rows="7" class="form-control" placeholder="treść opini">{{ old('content') }}</textarea>
                    @include('shared.error', ['name' => 'name'])
                </div>
                <div class="form-group text-center">
                    <button class="btn bnt-sm btn-success text-light px-5">Zapisz</button>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection

@section('script')
<script src="{{ asset('js/bodyHeightFix.js') }}"></script>
@endsection
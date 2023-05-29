@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dati del fumetto: {{ $comic->title }}</h2>
    <img class="w-50" src="{{ $comic->image }}" alt="">
    <img class="my-3" src={{ $comic->thumb }} alt="">
    <h5 class="card-title"><span>TITOLO: </span> {{ $comic->title }}</h5>
    <p class="card-text"><span>Descrizione: </span> <p class="description">{{ $comic->description }}</p></p>
    <p class="card-text"><span>Prezzo: </span> {{ $comic->price }}€</p>
    <p class="card-text"><span>Serie: </span> {{ $comic->series }}</p>
    <p class="card-text"><span>Data d'uscita : </span> {{ $comic->sale_date }}</p>
    <p class="card-text"><span>Tipologia: </span> {{ $comic->type }}</p>
    <p>
        {{ $comic->description }}
    </p>
    <a href="{{ route('comic.index') }}">Torna indietro</a>
</div>
@endsection

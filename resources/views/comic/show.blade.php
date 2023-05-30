@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dati del fumetto:
            <p class="show"> {{ $comic->title }}</p>
        </h2>
        <img class="my-3" src={{ $comic->thumb }} alt="">
        <p class="card-text"><span class="show">Descrizione: </span>
        <p class="des-show">{{ $comic->description }}</p>
        </p>
        <p class="card-text des-show"><span class="show">Prezzo: </span> {{ $comic->price }} €</p>
        <p class="card-text des-show"><span class="show">Serie: </span> {{ $comic->series }}</p>
        <p class="card-text des-show"><span class="show">Data d'uscita : </span> {{ $comic->sale_date }}</p>
        <p class="card-text des-show"><span class="show">Tipologia: </span> {{ $comic->type }}</p>
        <a class="btn btn-primary ml-auto" href="{{ route('comic.index') }}">Torna indietro</a>
        <a class="btn btn-warning" href="{{ route('home') }}">Ritorna in home page</a>
        <form id="{{ $comic->id }}" class="d-inline-block" action="{{ route('comic.destroy', $comic->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger deletBtn" type="button">Elimina</button>
        </form>
       @include('layouts.delete')

    </div>

  @endsection

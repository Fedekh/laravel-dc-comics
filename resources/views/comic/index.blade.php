@extends('layouts.app')

@section('content')
    
<h3>i nostri comics</h3>

<div class="container d-flex flex-wrap text-center">
    <div class="row row-cols-4">
        @foreach ($comics as $comic)
          <div class="col g-3">
            <div class="card p-4 border-0">
                <div class="card-body">
                  <img class="my-3" src={{ $comic->thumb}} alt="">
                    <h5 class="card-title"><span>TITOLO: </span> {{ $comic->title }}</h5>
                    <p class="card-text"><span>Descrizione: </span> {{ $comic->description }}€</p>
                    <p class="card-text"><span>Prezzo: </span> {{ $comic->price }}€</p>
                    <p class="card-text"><span>Serie: </span> {{ $comic->series }}€</p>
                    <p class="card-text"><span>Data d'uscita : </span> {{ $comic->sale_date }}€</p>
                    <p class="card-text"><span>Tipologia: </span> {{ $comic->type }}</p>
                </div>
            </div>
          </div>
        @endforeach
    </div>
   
  </div>   

<a href="{{ route('comic.create') }}">aggiungi comic</a>
@endsection

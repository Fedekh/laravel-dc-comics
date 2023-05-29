@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>i nostri comics</h3>

        <div class="container d-flex flex-wrap text-center">
            <div class="row row-cols-4">
                @foreach ($comics as $comic)
                    <div class="col g-3">
                        <div class="card p-4 border-0" >
                            <div class="card-body" style="backgroud-color:#333;">
                                <img class="my-3" src={{ $comic->thumb }} alt="">
                                <h5 class="card-title"><span>TITOLO: </span> {{ $comic->title }}</h5>
                                <p class="card-text"><span>Prezzo: </span> {{ $comic->price }}€</p>
                                <a class="btn btn-success" href="{{ route('comic.show', $comic->id) }}">
                                    <i class="fa-solid fa-eye">MAGGIORI INFO</i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <a href="{{ route('comic.create') }}">aggiungi comic</a> <!--route serve per richiamare la rotta, nel nostro caso la rotta è comic.create-->
@endsection

<style>
    .card{
        background-color: #333
    }
    
</style>

@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">

        <h1 class="my-5">I nostri comics</h1>

        <div class="container d-flex flex-wrap text-center">
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <table class="table table-hover text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Info</th>
                        </tr>
                    </thead>
                    @foreach ($comics as $comic)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->description }}</td>
                                <td><a class="btn btn-success" href="{{ route('comic.show', $comic->id) }}">Dettagli </a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                {{-- <div class="col g-3">
                    <div class="card border-0">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <img class="my-3" src={{ $comic->thumb }} alt="">
                            <h6 class="card-title"><span>TITOLO: </span> {{ $comic->title }}</h6>
                            <p class="card-text"><span>Prezzo: </span> {{ $comic->price }} €</p>
                            <a class="btn btn-success" href="{{ route('comic.show', $comic->id) }}">Dettagli </a>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
        <a class="btn btn-success my-5" href="{{ route('comic.create') }}">Aggiungine un altro</a>
        <!--route serve per richiamare la rotta, nel nostro caso la rotta è comic.create-->
        <a class="btn btn-warning my-5" href="{{ route('home') }}">Ritorna in home page</a>
    </div>
@endsection

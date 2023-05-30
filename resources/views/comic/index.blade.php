@extends('layouts.app')

@section('content')
    <div class="container text-center my-5">

        <h1 class="my-5">I nostri comics</h1>

        <div class="container d-flex flex-wrap text-center">
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <table class="table">
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
                                <td class="w-75">{{ $comic->description }}</td>
                                <td class="d-flex flex-row border-bottom-0 gap-2 ">
                                    <a class="btn btn-success" href="{{ route('comic.show', $comic->id) }}"><i
                                            class="fa-solid fa-info fa-bounce"></i> </a>
                                    <a class="btn btn-primary" href="{{ route('comic.edit', $comic->id) }}"><i
                                            class="fa-solid fa-gear fa-bounce"></i></a>

                                    <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger deletBtn" type="button"><i class="fa-solid fa-trash fa-bounce"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        @include('layouts.delete')
          
        <a class="btn btn-success my-5" href="{{ route('comic.create') }}">Aggiungine un altro</a>
        <a class="btn btn-warning my-5" href="{{ route('home') }}">Ritorna in home page</a>
    </div>
@endsection

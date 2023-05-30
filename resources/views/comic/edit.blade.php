@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="my-3">Crea il tuo comics : </h1>
        <div class="">

            <form action="{{ route('comic.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $comic->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}">
                </div>
                <select name="" id="">
                    <option @selected($comic->type === 'comic') value="comic">comic</option>
                    <option @selected($comic->type === 'grapich novel') value="graphic novel">graphic novel</option>
                </select>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}">
                </div>
                <input type="submit" value="Salva" class="btn btn-primary">
                <a class="btn btn-success" href="{{ route('comic.index') }}">Annulla</a>
                <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger deletBtn" type="button">Elimina</button>
                </form>

            </form>
        </div>
        @include('layouts.delete')

    </div>
   
@endsection

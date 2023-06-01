@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="my-3">Crea il tuo comics : </h1>

        {{-- @if ($errors->any())        $errors è una variabile globale che contiene tutti gli errori, con any() restituisce un booleano, se ci sono errori allora mostriamo la lista degli errori
            <ul class="list-unstyled">          
                @foreach ($errors->all() as $error)    all() restituisce un array con tutti gli errori
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif --}}

        <div class="">

            <form action="{{ route('comic.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="formGroupExampleInput">Inserisci titolo</label>
                    <input type="text" name="title" class="form-control my-3 w-50 @error('title') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci titolo" value="{{ old('title') }}">
                    <!-- old() è un metodo che permette di mantenere il valore inserito in caso di errore, e scritto cosi, con 1 parametro, il primo è il nome del campo -->
                    @error('title')
                        <!-- $errors è una variabile globale che contiene tutti gli errori, con any() restituisce un booleano, se ci sono errori allora mostriamo la lista degli errori -->
                        <div class="invalid-feedback">
                            {{ $message }} {{-- $message è una variabile globale che fa parte di $errors --}}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput">Inserisci descrizione</label>
                    <input type="text" name="description"
                        class="form-control my-3 w-50 @error('description') is-invalid @enderror" id="formGroupExampleInput"
                        placeholder="Inserisci descrizione" value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Inserisci path foto</label>
                    <input type="text" name="thumb" class="form-control my-3 w-50 @error('thumb') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci path foto"
                        value="{{ old('thumb') }}">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Inserisci Prezzo</label>
                    <input type="text" name="price" class="form-control my-3 w-50 @error('price') is-invalid @enderror"
                        id="formGroupExampleInput2" placeholder="Inserisci Prezzo" value="{{ old('price') }} ">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput">Inserisci serie</label>
                    <input type="text" name="series"
                        class="form-control my-3 w-50 @error('series') is-invalid @enderror" id="formGroupExampleInput"
                        placeholder="Inserisci serie" value="{{ old('series') }}">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Data di pubblicazione</label>
                    <input type="text" name="sale_date"
                        class="form-control my-3 w-50 @error('sale_date') is-invalid @enderror" id="formGroupExampleInput2"
                        placeholder="Data di pubblicazione" value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Inserisci tipo</label>
                    <input type="text" name="type" class="form-control my-3 w-50 @error('type') is-invalid @enderror"
                        id="formGroupExampleInput2" placeholder="Inserisci tipo" value="{{ old('type') }}">
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('comic.index') }}">Ritorna nella lista</a>
                <a class="btn btn-warning" href="{{ route('home') }}">Ritorna in home page</a>


            </form>
        </div>

    </div>
@endsection

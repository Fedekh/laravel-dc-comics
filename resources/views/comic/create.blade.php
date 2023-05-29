@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="my-3">Crea il tuo comics : </h1>
        <div class="">

            <form action="{{ route('comic.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="formGroupExampleInput">Inserisci titolo</label>
                    <input type="text" name="title" class="form-control my-3 w-50" id="formGroupExampleInput"
                        placeholder="Inserisci titolo">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Inserisci descrizione</label>
                    <input type="text" name="description" class="form-control my-3 w-50" id="formGroupExampleInput"
                        placeholder="Inserisci descrizione">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Inserisci path foto</label>
                    <input type="text" name="thumb" class="form-control my-3 w-50" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Inserisci path foto">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Inserisci Prezzo</label>
                    <input type="text" name="price" class="form-control my-3 w-50" id="formGroupExampleInput2"
                        placeholder="Inserisci Prezzo">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Inserisci serie</label>
                    <input type="text" name="series" class="form-control my-3 w-50" id="formGroupExampleInput"
                        placeholder="Inserisci serie">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Data di pubblicazione</label>
                    <input type="text" name="sale_date" class="form-control my-3 w-50" id="formGroupExampleInput2"
                        placeholder="Data di pubblicazione">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Inserisci tipo</label>
                    <input type="text" name="type" class="form-control my-3 w-50" id="formGroupExampleInput2"
                        placeholder="Inserisci tipo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="{{ route('home') }}">Ritorna in home page</a>

                
            </form>
        </div>

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <h3>crea il tuo comics</h3>

    <form action="{{ route('comic.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput">inserisci titolo</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="inserisci titolo">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">inserisci descrizione</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput"
                placeholder="inserisci descrizione">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">inserisci url foto</label>
            <input type="text" name="thumb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="enter url">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">prezzo</label>
            <input type="text" name="price" class="form-control" id="formGroupExampleInput2"
                placeholder="Another prezzo">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Example series</label>
            <input type="text" name="series" class="form-control" id="formGroupExampleInput"
                placeholder="Example series">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another sales_date</label>
            <input type="text" name="sale_date" class="form-control" id="formGroupExampleInput2"
                placeholder="Another sales_date">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another type</label>
            <input type="text" name="type" class="form-control" id="formGroupExampleInput2"
                placeholder="Another type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

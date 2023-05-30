@extends('layouts.app')


@section('content')
<div class="container my-5 text-center">

  <h1>Ciao, sei curioso di vedere i nostri comics...</h1>
  <a class="btn my-5 btn-warning" href="{{ route('comic.index')}}">Clicca qui</a>
</div>

    
@endsection


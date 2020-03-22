
@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">
    <form action="/accueil/rup" method="post">
    	@csrf
      <input type="text" placeholder="Search.." name="med">
      <input type="submit" value="Enregistrer">
    </form>
</div>


@endsection
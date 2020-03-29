
@extends('layouts.app')

@section('content')

<div class="body" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.3) 0%,rgba(255,255,255,0.9) 100%), url(aa.jpg);">
<div class="flex-center position-ref full-height container" >
    <form action="/accueil/rup" method="post">
    	@csrf
    	<div class="input-group mb-3">
      <input type="text" placeholder="Search.." class="form-control" name="med">
      <input type="submit" class="btn btn-primary" value="Chercher">
        </div>
    </form>
</div>
</div>

@endsection
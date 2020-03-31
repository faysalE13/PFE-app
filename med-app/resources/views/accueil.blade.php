
@extends('layouts.app')

@section('content')

<div class="body" >
<div class="flex-center position-ref full-height container" >
    <form action="/accueil/rup" method="post">
    	@csrf
         <div class="input-group input-group-lg ">
  <input type="text" name="med" class="form-control shadow-sm " size="40" placeholder=" Chercher par NOM/DCI/CODE...">
        
  <div class="input-group-append">
    <input class="btn btn-primary" type="submit" value="Cherche">
  </div>
</div>

    </form>
    
</div>
</div>


@endsection
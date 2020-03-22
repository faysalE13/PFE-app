@extends('layouts.app')

@section('content')

      <form method="POST" action="/reponse" >
                        @csrf

<a href="/liste_pharmacie" class="btn btn-success">modifier</a>

<table class="table">
	  

  <tr>
   <th class="table-primary">Nom</th>
   <th class="table-primary">Date</th>
   <th class="table-primary">Disponibiliter</th>
   <th class="table-primary"></th>
  </tr>
  
     @foreach($rupture as $medd )
     <tr>
    <td class="table-primary">{{$medd->med}}</td>
    <td class="table-primary">{{$medd->created_at}}</td>

    <td class="table-primary"><input type="submit" class="btn btn-success" value="valid" name="disp"></td>
    <td class="table-primary"><input type="submit" class="btn btn-success" value="non_valid" name="disp"></td>
    
  </tr>
    @endforeach
    

</table>

</form>



@endsection
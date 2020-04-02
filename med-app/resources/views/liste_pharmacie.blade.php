@extends('layouts.app')

@section('content')
<br><br>
<div class="container-fluid">

<div class="row table-responsive">
            
           
            
 
            <table class="table table-striped table-sm" id="myTable">
          <thead>
            <tr>
              <th>#</th>	
              <th>Nom</th>
              <th>Prenom</th>        
              <th>Telephone</th>
              <th>Ville</th>
              <th>City</th>
              <th></th>
            </tr>
          </thead>
                      
                      @foreach($pharma as $pharmacie)
                      
                     @if($pharmacie->type == "pharmacie")

          <tbody>
            <tr id="">
              <td id="td">{{$pharmacie->id}}</td> 
              <td id="td">{{$pharmacie->nom}}</td> 
              <td id="td">{{$pharmacie->prenom}}</td> 
              <td id="td">{{$pharmacie->phon}}</td> 
              <td id="td">{{$pharmacie->position}}</td> 
              <td id="td"></td>
              <td id="td"><a href="{{ url('liste/pharmacie/'. $pharmacie->id )}}" class="btn btn-info" style="margin-left: 40%;">voir profil</a></td> 
            </tr> 

</tbody>
                   @endif
                      
                      @endforeach

        </table>


@endsection
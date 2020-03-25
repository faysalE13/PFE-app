@extends('layouts.app')

@section('content')



<br><br>


    
<div class="container-fluid">

<div class="row table-responsive">
            
           
            @foreach($reponse as $repp)
 
            <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Disponobility</th>
             
              <th>Nom</th>
              <th>Prenom</th>
              <th>Telephone</th>
              <th>City</th>
              <th>Date</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> {{$repp->disp}}</td> 
              
              <td>{{$repp->user->nom}}</td> 
              <td>{{$repp->user->prenom}}</td> 
              <td>{{$repp->user->phon}}</td> 
              <td>{{$repp->user->position}}</td> 
              <td>{{$repp->user->created_at}}</td>    
            </tr> 
</tbody>
        </table>
             @endforeach
           

          </tbody>
        </table>
      </div>
    
</div>




@endsection


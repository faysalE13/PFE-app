@extends('layouts.app')

@section('content')
















<div class="container-fluid">
  <div class="row">
    <nav class="col-md-3 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        @foreach($prof as $pro )
        <ul class="nav flex-column list-group-item-secondary rounded">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              
              {{$pro->prenom}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              
              {{$pro->email}} 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              
              </a>
              <a href="{{ url('modif/edit')}}" class="btn btn-success">modifier</a>
            
          </li>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         </ul>
         @endforeach
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4">
      <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
        
      </div>
    </div>
    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>



      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">liste de recherches</h1>
      </div>

     
    
      <div class="table-responsive">

        
            @if($pro->type == "pharmacie")
      <form method="POST" action="/reponse" >
                        @csrf
            
            <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Date</th>
              <th>Disponobility</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($rup as $medd )
            <tr>
              <td>{{$medd->id}}</td>
              <td>{{$medd->med}}</td>
              <td>{{$medd->created_at}}</td>
              <td><input type="submit" class="btn btn-success" value="valid" name="disp"></td>
              <td><input type="submit" class="btn btn-success" value="non_valid" name="disp"></td>    
            </tr>
            @endforeach
            </form>
            @elseif($pro->type == "fournisseur")

            
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
            @foreach($reponse as $repp)

            @if ($repp->disp == "non_valid")
            <tr>
              <td> {{$repp->disp}}</td> 
              <td>{{$repp->user->nom}}</td> 
              <td>{{$repp->user->prenom}}</td> 
              <td>{{$repp->user->phon}}</td> 
              <td>{{$repp->user->position}}</td> 
              <td>{{$repp->user->created_at}}</td>    
            </tr> 
            @endif
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
   





    </main>
  </div>
</div>











@endsection
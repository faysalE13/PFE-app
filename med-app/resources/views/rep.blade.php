@extends('layouts.app')

@section('content')

<table id="table">
  <tr>
    <th>disponobility</th>
    
  </tr>
  
     @foreach($reponse as $repp)
     <tr>
    <td>{{$repp->disp}}</td>
    <td>{{$repp->user_id}} 
</td>
  </tr>
    @endforeach
  </table>

@endsection


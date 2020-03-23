@extends('layouts.app')

@section('content')





@foreach($reponse as $repp)

@if ($repp->disp == "valid") 
    


  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">{{$repp->disp}}<br>
{{$repp->user->nom}}<br>
{{$repp->user->prenom}}<br>
{{$repp->user->position}}<br>
{{$repp->user->phon}}

</p>
    <small>Donec id elit non mi porta.</small>
  </a>

@else

<a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">{{$repp->disp}}<br>
{{$repp->user->nom}}<br>
{{$repp->user->prenom}}<br>
{{$repp->user->position}}<br>
{{$repp->user->phon}}

</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>
@endif
@endforeach
@endsection


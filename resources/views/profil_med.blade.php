@extends('layouts.app')

@section('content')

<br><br><br>
<form>
<div class="form-row align-items-center" style="" >
<div class="col-sm-4 my-1">
<!--<label for="dci" class="col-md-4 col-form-label text-md-right">{{ __('cherch par dci') }}</label>-->
<input type="text" id="dci" class="form-control" onkeyup="pardci()" placeholder="cherch par dci.." >
</div>
<div class="col-sm-4 my-1">
<!--<label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('cherch par nom') }}</label>-->
<input type="text" id="nom" class="form-control" onkeyup="parnom()" placeholder="Search for namescherch par nom.." >
</div>
<div class="col-sm-4 my-1">
<!--<label for="pys" class="col-md-4 col-form-label text-md-right">{{ __('cherch par pys') }}</label>-->
<input type="text" id="pays" class="form-control" onkeyup="parpays()" placeholder="cherch par pays.." >
</div>
</div>
</form>
<a href="/ajout" class="btn btn-success " style="margin-left: 85%;">ajouter medicament</a>

                        @if (session('success'))
                          <div class="alert alert-success" role="alert">
                          {{session('success')}}
                          </div>
                        @endif
                        @if (session('success'))
                          <div class="alert alert-success" role="alert">
                          {{session('success')}}
                          </div>
                        @endif

<table class="table table-striped table-sm" id="myTable">
          <thead>
            <tr>
              <th>#</th>
              <th>dci</th>
              <th>nom_med</th>
              <th>form</th>
              <th>code&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th>padosage</th>
              <th>pays</th>
              <th>ppa</th>
              <th>tarif</th>
              <th>remboursable</th>
              <th>date de creation</th>
              <th></th>              
            </tr>
          </thead>
          <tbody>
            @foreach($med as $meede)

           
            <tr>
              <td>{{$meede->id}}</td>
              <td>{{$meede->DCI}}</td> 
              <td>{{$meede->NOM_DE_MARQUE}}</td> 
              <td>{{$meede->FORME}}</td> 
              <td>{{$meede->CODE}}</td> 
              <td>{{$meede->DOSAGE}}</td>
              <td>{{$meede->PAYS}}</td>
              <td>{{$meede->PPA}}</td>
              <td>{{$meede->TARIF}}</td>
              <td>{{$meede->REMBOURSEMENT}}</td>
              <td>{{$meede->created_at}}</td>
              <td>            <a href="{{ url('edit/'. $meede->id .'/med')}}" class="btn btn-success btn-block">modifier medicament</a>
</td>
              
            </tr> 
            
            @endforeach
          </tbody>
        </table>

<script>
function pardci() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("dci");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function parnom() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("nom");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function parpays() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("pays");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 
        @endsection
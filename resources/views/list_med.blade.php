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
<input type="text" id="nom" class="form-control" onkeyup="parnom()" placeholder="cherch par nom.." >
</div>
<div class="col-sm-4 my-1">
<!--<label for="pys" class="col-md-4 col-form-label text-md-right">{{ __('cherch par pys') }}</label>-->
<input type="text" id="pays" class="form-control" onkeyup="parpays()" placeholder="cherch par pays.." >
</div>
</div>
</form>

                        

<table class="table table-striped table-info table-sm" id="myTable">
          <thead >
            <tr >
              <th >#</th>
              <th >DCI</th>
              <th >Nom commercial</th>
              <th >Form</th>
              <th >Code&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th >Dosage</th>
              <th >Pays</th>
              <th >PPA</th>
              <th >Tarif</th>
              <th >Remboursable</th>
              <th >Date de creation</th>
                            
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
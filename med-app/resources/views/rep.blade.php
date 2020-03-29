@extends('layouts.app')

@section('content')



<br><br>


<div class="row container" style="margin-left:  55%;">
  <label for="nom" class="col-md-3 col-form-label text-md-right">{{ __('Filtre par wilaya') }}</label>
<select id="wilaya" onchange="myFunction()" class=" col-sm-2 form-control selectpicker " required >
   <option selected >Touts wilaya</option>
  <option id="Adrar" >Adrar</option>
  <option id="Chlef" >Chlef</option>
  <option id="Laghouat" >Laghouat</option>
  <option id="Oum El Bouaghi" >Oum El Bouaghi</option>
  <option id="Batna" >Batna</option>
  <option id="Béjaïa" >Béjaïa</option>
  <option id="Biskra" >Biskra</option>
  <option id="Béchar" >Béchar</option>
  <option id="Blida" >Blida</option>
  <option id="Bouira" >Bouira</option>
  <option id="Tamanrasset" >Tamanrasset</option>
  <option id="Tébessa" >Tébessa</option>
  <option id="Tlemcen" >Tlemcen</option>
  <option id="Tiaret" >Tiaret</option>
  <option id="Tizi Ouzou" >Tizi Ouzou</option>
  <option id="Alger" >Alger</option>
  <option id="Djelfa" >Djelfa</option>
  <option id="Jijel" >Jijel</option>
  <option id="Sétif" >Sétif</option>
  <option id="Saïda" >Saïda</option>
  <option id="Skikda" >Skikda</option>
  <option id="Sidi Bel Abbès" >Sidi Bel Abbès</option>
  <option id="Annaba" >Annaba</option>
  <option id="Guelma" >Guelma</option>
  <option id="Constantine" >Constantine</option>
  <option id="Médéa" >Médéa</option>
  <option id="Mostaganem" >Mostaganem</option>
  <option id="M'Sila" >M'Sila</option>
  <option id="Mascara" >Mascara</option>
  <option id="Ouargla" >Ouargla</option>
  <option id="Oran" >Oran</option>
  <option id="El Bayadh" >El Bayadh</option>
  <option id="Illizi" >Illizi</option>
  <option id="Bordj Bou Arreridj" >Bordj Bou Arreridj</option>
  <option id="Boumerdès" >Boumerdès</option>
  <option id="El Tarf" >El Tarf</option>
  <option id="Tindouf" >Tindouf</option>
  <option id="Tissemsilt" >Tissemsilt</option>
  <option id="El Oued" >El Oued</option>
  <option id="Khenchela" >Khenchela</option>
  <option id="Souk Ahras" >Souk Ahras</option>
  <option id="Tipaza" >Tipaza</option>
  <option id="Mila" >Mila</option>
  <option id="Aïn Defla" >Aïn Defla</option>
  <option id="Naâma" >Naâma</option>
  <option id="Aïn Témouchent" >Ain Temouchent</option>
  <option id="Ghardaïa" >Ghardaïa</option>
  <option id="Relizane" >Relizane</option>
  
</select>
&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<br>
    
<div class="container-fluid">

<div class="row table-responsive">
            
           
            
 
            <table class="table table-striped table-sm" id="myTable">
          <thead>
            <tr>
              <th>Disponobility</th>
             
              <th>Nom</th>
              <th>Prenom</th>
              <th>Telephone</th>
              <th>City</th>
              <th>Date</th>
              <th>Date</th>
            </tr>
          </thead>
                      @foreach($ruup as $rup)
                      <?php $rupt = $rup->med  ?>
                      @endforeach
                      @foreach($reponse as $repp)
                      
                      @if ($repp->ruptur->med ==$rupt )

          <tbody>
            <tr id="">
              <td id="td">{{$repp->disp}}</td>
              <td id="td">{{$repp->ruptur->med}}</td>    
              <td id="td">{{$repp->user->nom}}</td> 
              <td id="td">{{$repp->user->prenom}}</td> 
              <td id="td">{{$repp->user->phon}}</td> 
              <td id="td">{{$repp->user->position}}</td> 
              <td id="td">{{$repp->user->created_at}}</td>    
            </tr> 

</tbody>
                   @endif
                      
                      @endforeach

        </table>
             
           

          </tbody>
        </table>
      </div>
    
</div>







<script>

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("wilaya");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1 || (input.value=="Touts wilaya")) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

@endsection


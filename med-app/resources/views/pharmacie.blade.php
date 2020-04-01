@extends('layouts.app')

@section('content')













<div class="container-fluid" >
  <div class="row" >
    <nav class="d-none d-md-block navbar-dark sidebar bg-info rounded position-fixed" >
      <div class="sidebar-sticky" >

        @foreach($prof as $pro )
        <ul class="nav flex-column ">
          <br><br>
          <li class="nav-item ">
            <a class="navbar-brand " href="/profil">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                   &nbsp;&nbsp;&nbsp;&nbsp;   Mon Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>&nbsp;&nbsp; Nom:  {{$pro->nom}}
            </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              
             &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>&nbsp;&nbsp; Prenom:  {{$pro->prenom}}
            </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              
             &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>&nbsp;&nbsp; Email:  {{$pro->email}} 
            </a>
          </li>
          <li class="navbar-brand">
            <a class="navbar-brand" href="#">
             &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>&nbsp;&nbsp; Telephone:  {{$pro->phon}}
            </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              
            &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>&nbsp;&nbsp; City:  {{$pro->position}}
          </a>
        </li>
        <br>
        <li>
          <a href="{{ url('modif/edit')}}" class="btn btn-success" style="margin-left: 30%;">modifier profile</a>
        </li>
           <br>
          <li class="nav-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Accueil
            </a>
          </li>
          <li class="nav-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/profil/liste/recherche">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              liste de recherche
            </a>
          </li>
          <li class="nav-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/profil/historique">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
              Hstorique de recherche
            </a>
          </li>
          
          
          <li class="nav-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/liste">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              liste medicament
            </a>
          </li>
          
          @if($pro->type == "pharmacie")
           
          
          <li class="nav-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/profil/med">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              consulter mes medicaments
            </a>
          </li>
          <li class="nav-item">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/ajout">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              Ajouter un medicament
            </a>
          </li>
          <br><br><br>
          @else
          <br><br><br><br><br>
          @endif
          
          

         </ul>
         @endforeach
      </div>
    </nav>

    <main role="main" class="col-md-9  ml-sm-auto col-lg-9 px-4" >
      <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
        
      </div>
    </div>
    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>


      
      <br><br><br>

                        @if (session('success'))
                          <div class="alert alert-success" role="alert">
                          {{session('success')}}
                          </div>
                        @endif
    
            @if($pro->type == "pharmacie")
      <form method="POST" action="/reponse" >
                        @csrf
            <h1 class="h2">liste de recherches</h1>
            <table class="table table-striped table-info table-sm" id="myTable">
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Date</th>
              <th></th>
              
            </tr>
          </thead>
          <tbody>
            
               

            @foreach($rup as $medd )
            <?php
                 $b=1; ?>
            @foreach($reponse as $ree )
                 @if($ree->user_id == $pro->id && $medd->id==$ree->ruptur_id) 
                 <?php
                 $b=0; ?>
                  @endif
            @endforeach
            @if($b==1 )
            <tr>
              
             
              <td>{{$medd->id}}</td>

              <td>{{$medd->med}}</td>


              <td>{{$medd->created_at}}</td>
              <td><a href="{{ url('rep/edit/'. $medd->id )}}" class="btn btn-info " style="margin-left: 50%;">Repond</a></td>    
            </tr>
            @endif
            @endforeach
                     
            
            </form>
            @elseif($pro->type == "fournisseur")

           
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


            <table class="table table-striped table-sm" id="tab">
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
          <tbody>
                      @foreach($reponse as $repon)

            @if ($repon->disp == "non_valid")
            <tr>
              <td> {{$repon->disp}}</td> 
              <td >{{$repon->ruptur->med}}</td> 
              <td >{{$repon->user->nom}}</td> 
              <td >{{$repon->user->prenom}}</td> 
              <td >{{$repon->user->phon}}</td> 
              <td >{{$repon->user->position}}</td> 
              <td >{{$repon->user->created_at}}</td>    
           
              </tr> 
            @endif
            @endforeach
          </tbody>
        </table>
        @endif

        @if($pro->type == "patient")

           <div class="flex-center position-ref  container" >
    <form action="/accueil/rup" method="post">
      <h1 class="text-center display-3" svg viewBox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-1hy7qas"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>MED-DZ...</h1>
      @csrf
         <div class="input-group input-group-lg ">
  <input type="text" name="med" class="form-control shadow-sm " size="40" placeholder=" Chercher par NOM/DCI/CODE...">
        
  <div class="input-group-append">
    <input class="btn btn-primary" type="submit" value="Cherche">
  </div>
</div>

    </form>
    
</div>            @endif
          
      </div>
   





    </main>
  </div>
</div>



<script>

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("wilaya");
  filter = input.value.toUpperCase();
  table = document.getElementById("tab");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
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
function parnom() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("nom");
  filter = input.value.toUpperCase();
  table = document.getElementById("tab");
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
</script>







@endsection
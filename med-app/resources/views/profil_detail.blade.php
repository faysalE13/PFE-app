@extends('layouts.app')

@section('content')
@if($profils->type =="pharmacie")
<br><br><br>


<!-- For demo purpose -->


<div class="row py-5 px-4">
    <div class="col-xl-10 col-md-6 col-sm-10 mx-auto">
        <div class="navbar-dark bg-dark p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Accueil
            </a>
          </li>
          <li class="list-inline-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/profil/liste/recherche">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              liste de recherche
            </a>
          </li>
          
          
          
          <li class="list-inline-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/liste">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              liste medicament
            </a>
          </li>
          <li class="list-inline-item">
           &nbsp;&nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="/profil/historique">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
              Hstorique de recherche
            </a>
          </li>
                    
                </ul>
            </div>

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden ">
            <div class="px-4 pt-0 pb-4 bg-info">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3 bg-dark" style="margin-top: 2%;"><img src="https://image.flaticon.com/icons/svg/1077/1077012.svg" width="150" height="150" alt="User free icon" title="User free icon"></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">{{ $profils->nom }}</h4>
                        <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i>{{ $profils->prenom }}</p>
                    </div>
                </div>
            </div>



            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Information</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                    <form >
                        
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control border-0 @error('nom') is-invalid @enderror" name="nom" value="{{ $profils->nom }}" required autocomplete="nom" autofocus readonly>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control border-0 @error('prenom') is-invalid @enderror" name="prenom" value="{{ $profils->prenom }}" required autocomplete="prenom" autofocus readonly>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6 input-group">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">@</span>
                                   </div>
                                <input id="email" type="email" class="form-control border-0 @error('email') is-invalid @enderror" name="email" value="{{ $profils->email }}" required autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>

                       







                        
                        

           


                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-6 input-group">
                              <div class="input-group-prepend ">
                                     <span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                   </div>
                                 <input type="text" maxlength="50" class="form-control border-0" name="position" placeholder="Your city.." value="{{ $profils->position }}" id="validationCustom03" required readonly>

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">

                            <label for="phon" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                            <div class="col-md-6 input-group">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">+213</span>
                                   </div>
                                <input id="phon" type="tel" class="form-control border-0 @error('phon') is-invalid @enderror" name="phon" value="{{ $profils->phon }}" required autocomplete="phon" readonly>

                                @error('phon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>


                    </form>          
               </div>
        </div><!-- End profile widget -->

    </div>
</div>
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  @endif
@endsection

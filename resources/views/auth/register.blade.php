@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

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
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmé mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>









                        
                        <div class="row justify-content-center">
                           <div class=" row col-md-8">
                            
                           <label class="col-md-4 col-form-label text-md-right">
                             <input type="radio" name="type" value="pharmacie" checked>Pharmacie
                           </label>
                           <label class="col-md-4 col-form-label text-md-right">
                             <input type="radio" name="type" value="fournisseur">Fournisseur
                           </label>
                           <label class="col-md-4 col-form-label text-md-right">
                             <input type="radio" name="type" value="patient">Patient
                           </label>
                           </div>
                        </div><br>



           


                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-6 input-group">
                                   <div class="input-group-prepend ">
                                     <span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                   </div>
                                <select id="position" name="position" class=" col-sm-12 form-control selectpicker " required >
   <option></option>                                 
  <option value="Adrar" >Adrar</option>
  <option value="Chlef" >Chlef</option>
  <option value="Laghouat" >Laghouat</option>
  <option value="Oum El Bouaghi" >Oum El Bouaghi</option>
  <option value="Batna" >Batna</option>
  <option value="Béjaïa" >Béjaïa</option>
  <option value="Biskra" >Biskra</option>
  <option value="Béchar" >Béchar</option>
  <option value="Blida" >Blida</option>
  <option value="Bouira" >Bouira</option>
  <option value="Tamanrasset" >Tamanrasset</option>
  <option value="Tébessa" >Tébessa</option>
  <option value="Tlemcen" >Tlemcen</option>
  <option value="Tiaret" >Tiaret</option>
  <option value="Tizi Ouzou" >Tizi Ouzou</option>
  <option value="Alger" >Alger</option>
  <option value="Djelfa" >Djelfa</option>
  <option value="Jijel" >Jijel</option>
  <option value="Sétif" >Sétif</option>
  <option value="Saïda" >Saïda</option>
  <option value="Skikda" >Skikda</option>
  <option value="Sidi Bel Abbès" >Sidi Bel Abbès</option>
  <option value="Annaba" >Annaba</option>
  <option value="Guelma" >Guelma</option>
  <option value="Constantine" >Constantine</option>
  <option value="Médéa" >Médéa</option>
  <option value="Mostaganem" >Mostaganem</option>
  <option value="M'Sila" >M'Sila</option>
  <option value="Mascara" >Mascara</option>
  <option value="Ouargla" >Ouargla</option>
  <option value="Oran" >Oran</option>
  <option value="El Bayadh" >El Bayadh</option>
  <option value="Illizi" >Illizi</option>
  <option value="Bordj Bou Arreridj" >Bordj Bou Arreridj</option>
  <option value="Boumerdès" >Boumerdès</option>
  <option value="El Tarf" >El Tarf</option>
  <option value="Tindouf" >Tindouf</option>
  <option value="Tissemsilt" >Tissemsilt</option>
  <option value="El Oued" >El Oued</option>
  <option value="Khenchela" >Khenchela</option>
  <option value="Souk Ahras" >Souk Ahras</option>
  <option value="Tipaza" >Tipaza</option>
  <option value="Mila" >Mila</option>
  <option value="Aïn Defla" >Aïn Defla</option>
  <option value="Naâma" >Naâma</option>
  <option value="Aïn Témouchent" >Ain Temouchent</option>
  <option value="Ghardaïa" >Ghardaïa</option>
  <option value="Relizane" >Relizane</option>
  
</select>

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">

                            <label for="phon" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                            <div class="col-md-6 input-group">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">+213</span>
                                   </div>
                                <input id="phon" type="tel" class="form-control @error('phon') is-invalid @enderror" name="phon" value="{{ old('phon') }}" required autocomplete="phon">

                                @error('phon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

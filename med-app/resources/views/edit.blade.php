@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/up/{id}">
                            <input type="hidden" name="_method" value="PUT">

                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $user->nom }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $user->prenom }}" required autocomplete="prenom" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                 <input type="text" maxlength="50" class="form-control" name="position" placeholder="Your city.." value="{{ $user->position }}" id="validationCustom03" required>

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
                                <input id="phon" type="tel" class="form-control @error('phon') is-invalid @enderror" name="phon" value="{{ $user->phon }}" required autocomplete="phon">

                                @error('phon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
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

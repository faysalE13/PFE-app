@extends('layouts.app')

@section('content')
<br><br><br>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="https://img.icons8.com/ios-glyphs/32/000000/treatment-plan.png"/>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Ajouter un medicament') }}</div>

                <div class="card-body">
                    
                            <form method="POST" action="/ajout/med">


@csrf

                        

                        <div class="form-group row">
                            <label for="dci" class="col-md-4 col-form-label text-md-right">{{ __('DCI') }}</label>

                            <div class="col-md-6">
                                <input id="dci" type="text" class="form-control @error('dci') is-invalid @enderror" name="dci" value="" required autocomplete="dci" autofocus>

                                @error('dci')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom_med" class="col-md-4 col-form-label text-md-right">{{ __('Nom de marque') }}</label>

                            <div class="col-md-6">
                                <input id="nom_med" type="text" class="form-control @error('nom_med') is-invalid @enderror" name="nom_med" value="" required autocomplete="nom_med" autofocus>

                                @error('nom_med')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form" class="col-md-4 col-form-label text-md-right">{{ __('Form') }}</label>

                            <div class="col-md-6">
                                <input id="form" type="text" class="form-control @error('form') is-invalid @enderror" name="form" value="" required autocomplete="form" autofocus>

                                @error('form')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dosage" class="col-md-4 col-form-label text-md-right">{{ __('Dosage') }}</label>

                            <div class="col-md-6">
                                <input id="dosage" type="text" class="form-control @error('dosage') is-invalid @enderror" name="dosage" value="" required autocomplete="dosage" autofocus>

                                @error('dosage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

                            <div class="col-md-6">
                                <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="" required autocomplete="pays" autofocus>

                                @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ppa" class="col-md-4 col-form-label text-md-right">{{ __('PPA') }}</label>

                            <div class="col-md-6">
                                <input id="ppa" type="text" class="form-control @error('ppa') is-invalid @enderror" name="ppa" value="" required autocomplete="ppa" autofocus>

                                @error('ppa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tarif" class="col-md-4 col-form-label text-md-right">{{ __('Tarif') }}</label>

                            <div class="col-md-6">
                                <input id="tarif" type="text" class="form-control @error('tarif') is-invalid @enderror" name="tarif" value="" required autocomplete="tarif" autofocus>

                                @error('tarif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="remboursable" class="col-md-4 col-form-label text-md-right">{{ __('Remboursable') }}</label>

                            <div class="col-md-6">
                                <input id="remboursable" type="text" class="form-control @error('remboursable') is-invalid @enderror" name="remboursable" value="" required autocomplete="remboursable" autofocus>

                                @error('remboursable')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
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
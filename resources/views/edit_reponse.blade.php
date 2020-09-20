@extends('layouts.app')

@section('content')
<br><br><br>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="https://img.icons8.com/ios-glyphs/32/000000/treatment-plan.png"/>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Répondre') }}</div>

                <div class="card-body">
                    
                            <form method="POST" action="{{ url('rep/'. $rupture->id )}}">

                           @csrf

                        

                        <div class="form-group row">
                            <label for="med" class="col-md-4 col-form-label text-md-right">{{ __('med') }}</label>

                            <div class="col-md-6">
                                <input id="med" type="text" class="form-control @error('med') is-invalid @enderror" name="med" value="{{ $rupture->med }}" required autocomplete="med" autofocus readonly>

                                @error('med')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('created_at') }}</label>

                            <div class="col-md-6">
                                <input id="created_at" type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{$rupture->created_at}}" required autocomplete="created_at" autofocus readonly>

                                @error('created_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0" style="margin-left: 38%;">
                            <div class="col-md-6 offset-md-4">
          
<input type="submit" class="btn btn-success" value="valid" name="disp">
<input type="submit" class="btn btn-success" value="non_valid" name="disp">
                            </div>
                        </div>
                        </div>
                         
                        

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear inmueble') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('inmuebles.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" maxlength="155" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-7">
                                <textarea id="description" type="" class="form-control @error('description') is-invalid @enderror" name="description" maxlength="1000" required>
                                </textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-7">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" min="0.00" step="0.01" required autocomplete="current-price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-7">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" maxlength="155" required autocomplete="current-address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="state" class="col-md-3 col-form-label text-md-right">State</label>

                            <div class="col-md-7">

                                <select name="state" class="form-control @error('state') is-invalid @enderror" id="state" required>
                                    <option value=></option>
                                    <option value="primaria">primaria</option>
                                    <option value="bachiller">bachiller</option>
                                    <option value="universitario">universitaria</option>
                                    <option value="postgrado">Post grado</option>
                                </select>

                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-3 col-form-label text-md-right">Ciudad</label>

                            <div class="col-md-7">

                                <select name="city" class="form-control @error('city') is-invalid @enderror" id="city" required>
                                    <option value=></option>
                                    <option value="primaria">primaria</option>
                                    <option value="bachiller">bachiller</option>
                                    <option value="universitario">universitaria</option>
                                    <option value="postgrado">Post grado</option>
                                </select>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-md-3 col-form-label text-md-right">Codig postal</label>

                            <div class="col-md-7">

                                <select name="zip" class="form-control @error('zip') is-invalid @enderror" id="zip" required>
                                    <option value=></option>
                                    <option value="primaria">primaria</option>
                                    <option value="bachiller">bachiller</option>
                                    <option value="universitario">universitaria</option>
                                    <option value="postgrado">Post grado</option>
                                </select>

                                @error('zip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-3 col-form-label text-md-right">País</label>

                            <div class="col-md-7">
                                <select name="country" class="form-control @error('country') is-invalid @enderror" id="zip" required>
                                    <option value=></option>
                                    <option value="primaria">primaria</option>
                                    <option value="bachiller">bachiller</option>
                                    <option value="universitario">universitaria</option>
                                    <option value="postgrado">Post grado</option>
                                </select>

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-3 col-form-label text-md-right">{{ __('photo') }}</label>

                            <div class="col-md-7">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" required autocomplete="current-photo">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row center">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear inmueble') }}</div>

                <div class="card-body">
                    <form method="PUT" action="{{ route('inmuebles.update', $inmueble->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" maxlength="155" value="{{ $inmueble->name }}" required autocomplete="off" autofocus>

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
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" maxlength="1000" required>{{ $inmueble->description }}</textarea>

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
                                <input id="price"
                                        type="number"
                                        class="form-control 
                                        @error('price') is-invalid @enderror" 
                                        name="price" 
                                        min="0.00" 
                                        step="0.01"
                                        required autocomplete="current-price"
                                        value="{{ $inmueble->price }}">

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
                                <input id="address" 
                                        type="text" 
                                        class="form-control 
                                        @error('address') is-invalid @enderror" 
                                        name="address" 
                                        maxlength="155" 
                                        required autocomplete="current-address"
                                        value="{{ $inmueble->address }}">

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

                                <select name="state" 
                                        class="form-control 
                                        @error('state') is-invalid @enderror" 
                                        id="state" 
                                        required>
                                    <option value="{{ $inmueble->state }}">{{ $inmueble->state }}</option>
                                    <option value="pr">primaria</option>
                                    <option value="ba">bachiller</option>
                                    <option value="un">universitaria</option>
                                    <option value="po">Post grado</option>
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

                                <select name="city" class="form-control @error('city') is-invalid @enderror" id="city" id="city" required>
                                    <option value="{{ $inmueble->city }}">{{ $inmueble->city }}</option>
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

                                <select name="zip" class="form-control @error('zip') is-invalid @enderror" id="zip" required id="zip">
                                    <option value="{{ $inmueble->zip }}">{{ $inmueble->zip }}</option>
                                    <option value="prima">primaria</option>
                                    <option value="bachi">bachiller</option>
                                    <option value="unive">universitaria</option>
                                    <option value="postg">Post grado</option>
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
                                <select name="country" id="country" class="form-control @error('country') is-invalid @enderror" id="zip" required>
                                    <option value="{{ $inmueble->country }}">{{ $inmueble->country }}</option>
                                    <option value="pr">primaria</option>
                                    <option value="ba">bachiller</option>
                                    <option value="un">universitaria</option>
                                    <option value="po">Post grado</option>
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
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" required autocomplete="current-photo" 
                                value="{{$inmueble->photo}}">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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
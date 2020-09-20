@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inmuebles') }}</div>

                <div class="card-body">
                        @csrf

                        @foreach ($inmuebles as $inmueble)
                            <p>{{$inmueble->name}}</p>        
                        @endforeach

                        {{ $inmuebles->links() }}
                        {{-- <div class="form-group row">
                            <label for="hola" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="hola" type="text" class="form-control @error('hola') is-invalid @enderror" name="hola" value="{{ old('hola') }}" required autocomplete="hola" autofocus>

                                @error('hola')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

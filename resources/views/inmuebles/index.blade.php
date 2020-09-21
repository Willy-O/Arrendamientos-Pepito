@extends('layouts.app')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inmuebles') }}</div>

                <div class="card-body">
                        @csrf

                        <div>
                            @foreach ($inmuebles as $inmueble)       
                                        <img src="{{ asset($inmueble->photo) }}" alt="" srcset="" class="img-fluid. max-width: 100%;">
                                        <label for="hola" class="col-md-4 col-form-label text-md-right">{{ $inmueble->name }}</label>

                                </div>
                            @endforeach
                        </div>

                        {{ $inmuebles->links() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

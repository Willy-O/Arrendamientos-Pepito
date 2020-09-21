@extends('layouts.app')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@section('content')
<div class="container">
    <div class="card-header">{{ __('Inmuebles') }}</div>
            @csrf
            
            <div class="row">
                @foreach ($inmuebles as $inmueble)
                    <div class="col-4">
                        <img src="{{ asset($inmueble->photo) }}" alt="" srcset="" class="img-fluid. max-width: 100%;">
                        <label for="address">{{ $inmueble->country }} {{ $inmueble->state }} {{ $inmueble->city}}</label>
                        <label for="name">{{ $inmueble->price }}</label>
                    </div>   
                @endforeach
            </div>
        <div class="row justify-content-center">
            <div class="col-6">
                {{ $inmuebles->links() }}
            </div>
        </div>
</div>
@endsection

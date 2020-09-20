@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <a href="{{ asset($inmueble->photo) }}" class="thumbnail" target="_blank">
            <img src="{{ asset($inmueble->photo)}}">
        </a>

        <table class="table table-bordered"> 
            <tr>
                <th>Nombre</th>
                <td>{{$inmueble->name}}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{$inmueble->description}}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{$inmueble->price}}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{$inmueble->address}}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{$inmueble->state}}</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>{{$inmueble->city}}</td>
            </tr>
            <tr>
                <th>Codigo postal</th>
                <td>{{$inmueble->zip}}</td>
            </tr>
            <tr>
                <th>País</th>
                <td>{{$inmueble->country}}</td>
            </tr>
        </table>
    </div>
@endsection
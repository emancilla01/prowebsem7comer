@extends('plantilla')
@section('menu')
    @include('menu1')
@endsection
@section('contenido1')
    <h1>Lista de Paises</h1>
    <hr>
    {{-- <ul>
        @foreach ($paises as $country)             
        <li>{{$country->country_id}} {{$country->country}}</li>
        @endforeach
    </ul>
    {{$paises->links()}} --}}
@endsection








{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de paises</title>
</head>
<body>
    <h1>Lista de Paises</h1>
    <hr>
    <ul>
        @foreach ($paises as $country)             
        <li>{{$country->country_id}} {{$country->country}}</li>
        @endforeach
    </ul>
    {{$paises->links()}}
  
</body>
</html> --}}
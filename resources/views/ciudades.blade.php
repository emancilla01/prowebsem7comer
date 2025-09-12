@extends('plantilla')
@section('menu')
    @include('menu1')
@endsection
@section('contenido1')
    <h1>Lista de Ciudades</h1>
    <hr>
    {{-- <ul>
        @foreach ($ciudades as $city)             
        <li>{{$city->city_id}} {{$city->city}}</li>
        @endforeach
    </ul>
    {{$ciudades->links()}} --}}
@endsection




{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ciudades</title>
</head>
<body>
    <h1>Lista de Ciudades</h1>
    <hr>
    <ul>
        @foreach ($ciudades as $city)             
        <li>{{$city->city_id}} {{$city->city}}</li>
        @endforeach
    </ul>
    {{$ciudades->links()}}
  
</body>
</html> --}}
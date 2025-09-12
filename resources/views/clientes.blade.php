@extends('plantilla')
@section('menu')
    @include('menu1')
@endsection
@section('contenido1')
    <h1>Lista de Clientes</h1>
    <hr>
    {{-- <ul>
        @foreach ($clientes as $customer)             
        <li>{{$customer->customer_id}} {{$customer->first_name}}</li>
        @endforeach
    </ul>
    {{$clientes->links()}} --}}
@endsection






{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <hr>
    <ul>
        @foreach ($clientes as $customer)             
        <li>{{$customer->customer_id}} {{$customer->first_name}}</li>
        @endforeach
    </ul>
    {{$clientes->links()}}
  
</body>
</html> --}}
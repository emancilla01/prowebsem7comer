@extends('plantillas.plantilla2')
@section('contenido')

<div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha nac</th>
            <th>RFC</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr class="">
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->fecha_nac}}</td>
            <td>{{$cliente->rfc}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>
    {{$clientes->links()}}
</p>
</div>
@endsection
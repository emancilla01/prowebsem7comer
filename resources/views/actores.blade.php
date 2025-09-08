<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de actores</title>
</head>
<body>
    <h1>Lista de Actores</h1>
    <hr>
    <ul>
        @foreach ($actores as $actor)             
        <li>{{$actor->actor_id}} {{$actor->first_name}}</li>
        @endforeach
    </ul>
    {{$actores->links()}}
  
</body>
</html>
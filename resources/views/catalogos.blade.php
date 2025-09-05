<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogos</title>
</head>
<body>
    <h1>Catalogos</h1>
    <hr>
    <?php
    echo auth()->user()->name . "<br>"; 
    echo auth()->user()->email;
    ?>
    <hr>
    {{  auth()->user()->name }}
    <br>
    {{  auth()->user()->email }}

    


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if($categoryGame)
        <h1>El nombre del videoJuego es: {{$nameVideogame}} y la categoria es: {{$categoryGame}} </h1>
    @else
    <h1>El nombre del videoJuego es: {{$nameVideogame}}</h1>
    @endif
   
</body>
</html>
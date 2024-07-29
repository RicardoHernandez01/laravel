<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de videojuegos</h1>
    <p><a href="{{route('games')}}">Listar todos los juegos</a></p>
    <h2>Lista de creación de videojuegos</h2>
    <form action="{{route('createVideogame')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nombre del videojuego" name="name_game">
        <select name="categoria_id" id="">
            @foreach($categorias as $categorias)
            <option value="{{$categorias->id}}">{{$categorias->name}}</option>

            
            @endforeach

    
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
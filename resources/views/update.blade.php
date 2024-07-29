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
    <form action="{{route('updateVideogame') }}" method="POST">
        @csrf
        <input type="hidden" name="game_id" value="{{$game->id}}">
        <input type="text" placeholder="Nombre del videojuego" name="name_game" value="{{$game->name}}">
        <select name="categoria_id" id="">

            @foreach($categorias as $categorias)
            <option value="{{$categorias->id}}"  @if($categorias->id == $game->category_id) selected @endif>{{$categorias->name}}</option>
            @endforeach

    
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/mariosa.png') }}">
    <title>Proyecto Esmeralda</title>
    <title>Lista de Ventas</title>
    <link rel="stylesheet" href="{{ asset('css/roductos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caracteristicas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hola.css') }}">
</head>

<header>
    @include('menu')
</header>

<body> 
    <div class="buscador">
        <form action="/buscar" method="GET">
            <input type="text" name="q" placeholder="Buscar productos">
            <button type="submit">Buscar</button>
        </form>
    </div>

    <div class="productos">
        @forelse($productos as $fila)
            <div class="cont">
                {{ $fila->nombre }}
                <img src="{{ asset('img/' . $fila->imagen) }}" alt="Imagen" width="200px" height="200">
                <a href="{{ route('catalogo', ['id' => $fila->codigoproducto]) }}">Comprar</a>
            </div>

        @empty
        @endforelse
    </div>
</body>
<style>
    .buscador {
    text-align: center; 
    margin-top: 20px; 
}

.buscador form {
    display: inline-block; 
}

</style>
</html>

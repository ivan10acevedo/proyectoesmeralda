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
</head>
<header>
    @include('menu')
</header>
<body>
    <form action="/buscar" method="GET">
        <input type="text" name="q" placeholder="Buscar productos">
        <button type="submit">Buscar</button>
    </form>
    <div class="productos">
        @forelse($productos as $producto)
            <div class="cont">
                {{ $producto->nombre }}
                <img src="{{ asset('img/' . $producto->imagen) }}" alt="Imagen" width="200px" height="200">
                <a href="{{ route('catalogo', ['id' => $producto->codigoproducto]) }}">Comprar</a>
            </div>
        @empty
            <p>No se encontraron productos.</p>
        @endforelse
    </div>
</body>
</html>

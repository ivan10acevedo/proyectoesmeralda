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
    <div class="productos">
        @forelse($caracteristicas as $fila)
            <div class="caracteristicas">
                <h4>Nombre</h4>{{ $fila->nombre }}
                <h4>Tipo talla</h4>{{ $fila->tipotalla }}
                <h4>Descricion</h4>{{ $fila->descripcion }}
                <h4>Calidad</h4>{{ $fila->calidad }}
                <h4>Kilates</h4>{{ $fila->kilates }}
                <img src="{{ asset('img/' . $fila->imagen) }}" alt="Imagen" width="200px" height="200">
                <a href="">Comprar</a>
            </div>

        @empty
        @endforelse
    </div>
    <h1>Otros</h1>
    <div class="productos">
        @forelse($productos as $fila)
            <div class="cont">{{ $fila->nombre }}
                <img src="{{ asset('img/' . $fila->imagen) }}" alt="Imagen" width="200px" height="200">
                <a href="{{ route('catalogo', ['id' => $fila->codigoproducto]) }}">Comprar</a>
            </div>

        @empty
        @endforelse
</body>

</html>

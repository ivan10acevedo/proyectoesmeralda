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
    <div class="productos">
        @forelse($caracteristicas as $fila)
            <div class="caracteristicas">
                <h4>Nombre</h4>{{ $fila->nombre }}
                <h4>Tipo talla</h4>{{ $fila->tipotalla }}
                <h4>Descricion</h4>{{ $fila->descripcion }}
                <h4>Calidad</h4>{{ $fila->calidad }}
                <h4>Kilates</h4>{{ $fila->kilates }}
                <div class="valor">
                    <h4>Precio</h4>{{ $fila->precio }}
                </div>
                <img src="{{ asset('img/' . $fila->imagen) }}" alt="Imagen" width="200px" height="200">
                <a href="{{ route('compra', ['id' => $fila->codigoproducto])}}">Comprar</a>
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
<style>
    .valor {
    color: #0d6417; 
    border-radius: 5px;
    font-weight: bold; 
    margin : 2px solid rgb(10, 81, 16); 
    font-size: 28px; 
    }
    a {
    background-color:  #1b6c10;
    color: #fcfffc;
    text-decoration: none;
    transition: color 0.3s;
  }
  
  a:hover {
    color: #97bc1e;
  }
</style>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{asset('img/esmeralda.jpg')}}">
        <title>Proyecto Esmeralda</title>
        <title>Lista de Ventas</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    
    <header>
        <h1>Lista de Ventas</h1>
        <nav class="menu">
            <ul>
                <a href="">Inicio</a>
                <a href="{{route('productos.index')}}">Productos</a>
                <a href="#">Servicios</a>
                <a href="#">Contacto</a>
            </ul>
        </nav>
    </header>
<style>
.productos{
display: grid;
grid-template-columns: auto auto auto auto;
justify-content: center;
width: auto;
height: auto;
}

.cont{
    margin: 40px;
    display: grid;
    justify-content: center;
    width: 200px;
    height: 200px;
}
</style>
<body>
        <div class="productos">
    @forelse($productos as $fila)
    

             <div class="cont">{{$fila->nombre}}
                    <img src="{{ asset('img/'. $fila->imagen) }}" alt="Imagen" width="200px" height="200">
                    <a href="">Comprar</a>
            </div>
                  
    @empty
    @endforelse
    </div>
</body>
</html>
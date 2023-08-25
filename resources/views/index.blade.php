    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{asset('img/esmeralda.jpg')}}">
        <title>Proyecto Esmeralda</title>
        <title>Lista de Ventas</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
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

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <section class="ventas">
            <div class="venta">
                <img src="{{ asset('img/esmeralda.jpg') }}" alt="Imagen 1">
                <h1> Bienvenidos a Centro Esmeralda, una empresa apasionada por la belleza
                     y el misterio de las esmeraldas. Desde nuestra fundación, nos hemos dedicado
                     a explorar, adquirir y ofrecer las esmeraldas más excepcionales y de la más
                     alta calidad a los amantes de las gemas en todo el mundo.</h1> 
                     <img src="{{ asset('img/esmeralda.jpg') }}" alt="Imagen 1">
            </div>
            <div class="venta">
                <img src="{{ asset('img/esmeralda.jpg') }}" alt="Imagen 1">
                <h1> Bienvenidos a Centro Esmeralda, una empresa apasionada por la belleza
                     y el misterio de las esmeraldas. Desde nuestra fundación, nos hemos dedicado
                     a explorar, adquirir y ofrecer las esmeraldas más excepcionales y de la más
                     alta calidad a los amantes de las gemas en todo el mundo.</h1>   
                     <img src="{{ asset('img/esmeralda.jpg') }}" alt="Imagen 1"> 
            </div>            
</body>
</html>

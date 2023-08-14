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
                    <a href="{{asset('img/iconoinicio.jpg')}}">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="#">Servicios</a>
                    <a href="#">Contacto</a>
                </ul>
            </nav>
        </header>

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <section class="ventas">
            <div class="venta">
                <span class="fecha">2023-08-11</span>
                <span class="monto">$150.00</span>
                <span class="cliente">Cliente A</span>
            </div>
            <div class="venta">
                <span class="fecha">2023-08-10</span>
                <span class="monto">$220.50</span>
                <span class="cliente">Cliente B</span>
            </div>
            <!-- Agrega más ventas aquí -->
        </section>
    </body>
    </html>
    
</body>
</html>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{asset('img/mariosa.png')}}">
        <title>Proyecto Esmeralda</title>
        <link rel="stylesheet" href="{{ asset('css/roductos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/distribucion.css') }}">
    </head>
    <!DOCTYPE html>
<html>
<header>
    @include('menu')
</header>
<body>
    <div class="container">
        <div class="box">
            <img src="{{ asset('img/minero.gif') }}" alt="Imagen 1">
            <h2>Descripción de la Empresa:</h2>
            <p>Centro Esmeralda es una empresa líder en la extracción,
             procesamiento y comercialización de esmeraldas de alta calidad.
             Fundada en 2005, nuestra empresa ha ganado una reputación excepcional
             por su compromiso con la excelencia y la sostenibilidad en la industria
             de las esmeraldas.</p>
        </div>
        <div class="box">
            <video controls autoplay muted src="{{ asset('video/Video.mp4') }}" type="video/mp4"></video>
            <h2>Misión:</h2>
            <p>Nuestra misión en Centro Esmeralda es llevar la belleza y el encanto de las
               esmeraldas a todo el mundo, al tiempo que contribuimos al desarrollo sostenible
               de las comunidades donde operamos. Nos esforzamos por ofrecer esmeraldas únicas
               de colores vibrantes y claridad excepcional.</p>
        </div>
        <div class="box">
            <img src="{{ asset('img/minero.gif') }}" alt="Imagen 3">
            <h2>Productos y Servicios: </h2>
            <p>Ofrecemos una amplia variedad de productos y servicios relacionados con las esmeraldas,
               que incluyen la venta de esmeraldas en bruto y talladas, joyería de esmeralda de diseño
               exclusivo, y asesoramiento personalizado para coleccionistas y compradores de joyas.</p>
        </div>
    </div>
</body>
</html>

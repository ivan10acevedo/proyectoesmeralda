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
            <h2>Proyecto Esmeralda</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget justo id nulla aliquet suscipit.</p>
        </div>
        <div class="box">
            <video controls autoplay muted src="{{ asset('video/Video.mp4') }}" type="video/mp4"></video>
            <h2>Proyecto Esmeralda</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget justo id nulla aliquet suscipit.</p>
        </div>
        <div class="box">
            <img src="{{ asset('img/minero.gif') }}" alt="Imagen 3">
            <h2>Proyecto Esmeralda</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget justo id nulla aliquet suscipit.</p>
        </div>
    </div>
</body>
</html>

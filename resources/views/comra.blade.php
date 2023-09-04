<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <link rel="stylesheet" href="{{ asset('css/compra.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/roductos.css') }}">
</head>
<body>
    <header>
        @include('menu')
    </header>
    <main>
        <div class="container">
            <h1>Finalizar Compra</h1>
            <div class="resumen-compra">
                <div class="productos">
                    @forelse($comra as $fila)
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
                        </div>
            
                    @empty
                    @endforelse
            </div>
                <form action="/procesar-compra" method="POST">
                
                    <h2>Información de Envío</h2>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                
                    <div class="form-group">
                        <label for="telefono">Número de Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>
                
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required>
                    </div>
                
                    <div class="form-group">
                        <label for="direccion">Dirección de Envío:</label>
                        <textarea id="direccion" name="direccion" rows="4" required></textarea>
                    </div>
                
                    <h2>Información de Pago</h2>
                    <div class="form-group">
                        <label for="tarjeta">Número de Tarjeta:</label>
                        <input type="text" id="tarjeta" name="tarjeta" required>
                    </div>
                
                    <div class="form-group">
                        <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                        <input type="text" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="MM/AA" required>
                    </div>
                
                    <div class="form-group">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" name="cvv" required>
                    </div>
                </form>
                <button type="submit">Confirmar Compra</button>
        </div>
    </main>
</body>
</html>

<h1>Lista de Ventas</h1>
<nav class="menu">
    <div class="todo">
        <div class="otion">
            <ul>
                <li><a href="{{ route('hola') }}">Inicio</a></li>
                <li>
                    <select onchange="window.location.href = this.value;">
                        <option value="">Productos</option>
                        <option value="{{ route('categoria', ['id' => 1]) }}">Esmeraldas</option>
                        <option value="{{ route('categoria', ['id' => 2]) }}">Euclasias</option>
                    </select>
                </li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        <div class="log">
            @include('layouts/app')
        </div>
    </div>
</nav>
<style>
.todo {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.otion {
    flex-grow: 1;
    text-align: center;
}

.log {
    margin-left: 10px; /* O cualquier otro valor de margen que desees */
    
}

</style>

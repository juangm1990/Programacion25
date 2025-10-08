<div>
    <form action="{{ route('resultado') }}" method="POST">
        @csrf

        <label>Introduce el nombre del usuario a buscar:</label>
        <input type="text" name="nombre" required><br><br>

        <input type="submit" value="Buscar usuario">
    </form>
</div>

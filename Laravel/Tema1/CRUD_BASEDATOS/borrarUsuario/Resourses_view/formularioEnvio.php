<div>
    <form action="{{ route('resultado') }}" method="POST">
        @csrf

        <label>Introduce el nombre del usuario a borrar:</label>
        <input type="text" name="nombre" required><br><br>

        <input type="submit" value="Borrar usuario">
    </form>
</div>

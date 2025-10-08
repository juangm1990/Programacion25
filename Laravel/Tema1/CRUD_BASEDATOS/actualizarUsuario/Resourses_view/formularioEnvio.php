<div>
    <form action="{{ route('resultado') }}" method="POST">
        @csrf

        <label>Nombre del usuario a actualizar:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Nuevo email:</label>
        <input type="text" name="email"><br><br>

        <label>Nueva contraseña:</label>
        <input type="password" name="password"><br><br>

        <label>Nueva fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento"><br><br>

        <input type="submit" value="Actualizar usuario">
    </form>
</div>

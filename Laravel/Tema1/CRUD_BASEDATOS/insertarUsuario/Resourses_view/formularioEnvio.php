<div>
    <form action="{{ route('resultado') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Email:</label>
        <input type="text" name="email" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br><br>

        <input type="submit" value="Insertar usuario">
    </form>
</div>

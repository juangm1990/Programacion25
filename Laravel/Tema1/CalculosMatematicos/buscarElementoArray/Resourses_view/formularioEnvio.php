<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf

        <label>Introduce los números separados por comas:</label><br>
        <input type="text" name="numeros" placeholder="Ejemplo: 2, 4, 6, 8, 10" required><br><br>

        <label>Introduce el número a buscar:</label><br>
        <input type="number" name="buscar" required><br><br>

        <input type="submit" value="Buscar elemento">
    </form>
</div>

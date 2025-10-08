<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf
        <label>Introduce los números separados por comas:</label><br>
        <input type="text" name="numeros" placeholder="Ejemplo: 4, 8, 15, 16, 23, 42" required><br><br>
        <input type="submit" value="Buscar número mayor">
    </form>
</div>

<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf
        <label>Introduce los números separados por comas:</label><br>
        <input type="text" name="numeros" placeholder="Ejemplo: 5, 10, 15, 20" required><br><br>
        <input type="submit" value="Calcular media">
    </form>
</div>

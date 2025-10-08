<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce la primera fecha:</label>
        <input type="date" name="fecha1" required><br><br>

        <label>Introduce la segunda fecha:</label>
        <input type="date" name="fecha2" required><br><br>

        <input type="submit" value="Calcular diferencia">
    </form>
</div>

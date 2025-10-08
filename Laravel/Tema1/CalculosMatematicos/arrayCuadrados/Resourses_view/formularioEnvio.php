<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce un número:</label>
        <input type="number" name="numero" min="1" required><br><br>

        <input type="submit" value="Generar cuadrados">
    </form>
</div>
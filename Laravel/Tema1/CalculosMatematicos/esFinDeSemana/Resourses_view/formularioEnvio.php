<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce una fecha:</label>
        <input type="date" name="fecha" required><br><br>

        <input type="submit" value="Comprobar si es fin de semana">
    </form>
</div>

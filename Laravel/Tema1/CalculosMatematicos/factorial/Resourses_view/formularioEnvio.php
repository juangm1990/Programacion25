<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce un número:</label>
        <input type="number" name="numero" min="0" required><br><br>

        <input type="submit" value="Calcular factorial">
    </form>
</div>

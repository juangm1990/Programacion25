<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce un número:</label>
        <input type="number" name="numero" required><br><br>

        <input type="submit" value="Sumar dígitos">
    </form>
</div>

<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce el primer número:</label>
        <input type="number" name="numero1" required><br><br>

        <label>Introduce el segundo número:</label>
        <input type="number" name="numero2" required><br><br>

        <input type="submit" value="Comprobar múltiplo">
    </form>
</div>

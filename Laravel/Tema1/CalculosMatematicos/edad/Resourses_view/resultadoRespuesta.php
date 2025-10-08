<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce tu fecha de nacimiento:</label>
        <input type="date" name="fecha" required><br><br>

        <input type="submit" value="Calcular edad">
    </form>
</div>

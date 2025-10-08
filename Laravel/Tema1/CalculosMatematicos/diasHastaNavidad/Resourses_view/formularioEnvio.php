<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Haz clic para calcular cuántos días faltan para Navidad:</label><br><br>

        <input type="submit" value="Calcular">
    </form>
</div>

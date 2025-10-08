<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce un texto:</label>
        <input type="text" name="texto" required><br><br>

        <input type="submit" value="Invertir texto">
    </form>
</div>

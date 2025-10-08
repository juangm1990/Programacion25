<div>
    <form action="{{ route('resultado') }}" method="GET">
        @csrf 

        <label>Introduce una palabra o frase:</label>
        <input type="text" name="texto" required><br><br>

        <input type="submit" value="Comprobar palíndromo">
    </form>
</div>

<div>
    <form action="{{ route('resultado') }}" method="POST">
        @csrf

        <label>Haz clic para mostrar todos los usuarios:</label><br><br>

        <input type="submit" value="Listar usuarios">
    </form>
</div>

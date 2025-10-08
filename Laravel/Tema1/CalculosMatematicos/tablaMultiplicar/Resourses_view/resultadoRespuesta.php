<div>
    {!! $resultado !!} 
    <!-- Muestra el resultado interpretando etiquetas HTML, por ejemplo <br> -->

    {{ $resultado }}
    <!-- Muestra el resultado en texto plano | ejemplo: El número es par: true -->
</div>

<!--
{{ $resultado }} → El número es par: true
Muestra texto normal sin formato HTML.

{{ $resultado }} → Resultado con <br>
Si el texto contiene etiquetas HTML (como <br>), no se verán los saltos de línea
a menos que uses {!! $resultado !!}.
-->

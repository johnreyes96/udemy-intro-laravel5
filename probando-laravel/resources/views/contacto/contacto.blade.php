{{-- Mi comentario de HTML --}}
<?php // Mi comentario de PHP ?>
<h1>Página de contacto {!!$nombre!!} {{-- isset($edad) && !is_null($edad) ? $edad : 'No existe la edad' --}}</h1>

@if(is_null($edad))
    No existe la edad
@else
    Si existe la edad: {{ $edad }}
@endif
<br>

<!--if():
else:
endif;-->

<?php $numero = 6; ?>
<p>Tabla del {{ $numero }}</p>

@for($i = 1; $i <= 10; $i++)
    {{ $i.' x '.$numero.' = '.($i*$numero) }}<br>
@endfor

<?php $j = 1; ?>
{{-- $j = 1 --}}
@while($j <= 7)
    <p>{{ 'Hola mundo '.$j }}</p>
    <?php $j++ ?>
@endwhile
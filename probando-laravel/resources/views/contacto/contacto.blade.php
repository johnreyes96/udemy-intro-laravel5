{{-- Mi comentario de HTML --}}
<?php // Mi comentario de PHP ?>
<h1>Página de contacto {!!$nombre!!} {{-- isset($edad) && !is_null($edad) ? $edad : 'No existe la edad' --}}</h1>

@if(is_null($edad))
    No existe la edad
@else
    Si existe la edad: {{ $edad }}
@endif

<!--if():
else:
endif;-->
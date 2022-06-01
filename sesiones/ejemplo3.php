<?php

session_start(); //la sesión continua abierta porque viene ejemplo 1 al abrir la pág. por que no se ha colocado destroy en la anterior pág. para cerrar sesión
//aunque no esta conectada por un enlace como en el ejemplo 1 nos envia por enlace
echo 'Bienvenido a la página de ejemplo #3<br />';
$color=$_session 'verde';
$animal=$_session 'gato';
$instante=date=$_session 'instante';


// Puede ser conveniente usar el SID aquí, como hicimos en pagina1.php
echo "Hoy es : . $color . ";
?>
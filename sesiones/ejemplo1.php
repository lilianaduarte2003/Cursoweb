<?php

session_start();// Iniciar o continuar sesión 

echo 'Bienvenido a la página de ejemplo #1';//   ejecutamos mostramos iniciar sesión

$_SESSION['color']  = 'verde';// array que guarda variables color, animal, instante tiempo
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time();

// Funciona si la cookie de sesión fue aceptada
echo '<br /><a href="ejemplo2.php">Ejemplo 2</a>'; // muestra enlace pág. 2

// O quizás pasar el id de sesión, si fuera necesario
// echo '<br /><a href="ejemplo2.php?' . SID . '">página 2</a>';
?>
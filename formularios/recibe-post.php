<?php

// print_r($_POST);
// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $fecha = $_POST['fecha'];
// $terminos = $_POST['terminos'];

// echo 'Hola ' . $nombre . 'eres un ' . $sexo . ' y has escogido la fecha: '. $fecha;

  if(!$_POST) { //si no tengo datos; me envia de nuevo para que rellene los datos me sale arriba en el navegador
     header('Location: http://localhost/Cursoweb/formularios/ejemplo-form-index2.php'); //Carpeta y archivo para rellenar el form correcto
 }
//se guarda todo en la array con las variables get
 $nombre = $_POST['nombre'];
 $sexo = $_POST['sexo'];
 $fecha = $_POST['fecha'];
 $terminos = $_POST['terminos'];

 echo 'Hola ' . $nombre . 'eres un ' . $sexo . ' y has escogido la fecha: '. $fecha;

?>
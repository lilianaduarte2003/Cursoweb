<?php

$errores='';  // errores que cometemos; //quita espacios

 if (isset($_POST['submit'])) { //isset= establecer ; submit= enviar
    $nombre=$_POST['nombre']; // guardamos los valores en post nombre';
    $email=$_POST['email'];

    // echo 'Tu nombre es ' . $nombre . '<br>';
    // echo 'Tu correo es ' . $email . '<br>';
    // Hasta aqui el usuario podria inyectar código <strong>Marc</strong>
    // Incluso podrian estar vacios los campos
    // Para validar los datos correctos debemos limpiar el código que recibimos

    if (!empty($nombre)) {  // si la variable no esta vacia; todos son filtros para no recibir información nociva
        // $nombre= trim($nombre); //quita espacios delante y detras
        // $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
        // $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código

        //$nombre=filter_var($nombre, FILTER_SANITIZE_STRING); //Filtros de "saneamiento" retira caracteres que no queremos este ya no existe

        echo 'Tu nombre es ' . $nombre . '<br>';
    } else {
        $errores .= 'Por favor escribe un nombre <br>'; //si no tenemos varlor en nombre sale mensaje Por favor escribe un nombre
    }
    if (!empty($email)) {  //empty= vacio
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo no podremos colocar caracteres especiales
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de "validación" del correo, si es lo que realmente queremos? un correo y si no es email lo concatena y sale el mensaje escribe un correo valido
            $errores .= 'Por favor escribe un correo válido <br>';
        } else {
            echo 'Tu correo es ' . $email . '<br>';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Valida datos del formulario</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> <!--ruta exacta archivo=valida información php"-->
        <input type="text" name="nombre" placeholder="Nombre" id=""><!--imput de tipo texto"  placeholder=texto que aparece encima que indica lo que tenemos que hacer-->
        <input type="text" name="email" placeholder="Email" id=""> <!--Tipo normal type="email"-->

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>
            
        <input type="submit" name="submit" value="Enviar formulario" > <!--submit tiene un valor hemos echo click en el buton"-->
    </form>
</body>
</html>
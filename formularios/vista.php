<?php

$errores='';
$errorNombre='';
$errorCorreo='';

if (isset($_POST['submit'])) {
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];

   

    if (!empty($nombre)) {
        $nombre= trim($nombre); 
        $nombre=htmlspecialchars($nombre); 
        $nombre=stripslashes($nombre); 
        
        echo 'Tu nombre es ' . $nombre . '<br>';
    } else {
        $errorNombre = 'Por favor escribe un nombre <br>';
    }
    if (!empty($email)) {
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);
       
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorCorreo = 'Por favor escribe un correo válido <br>';
        } else {
            echo 'Tu correo es ' . $email . '<br>';
        }
    } else {
        $errorCorreo = 'Por favor escribe un correo <br>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css"
href="estilo.css">
    <title>Valida datos del formulario</title>
    <style>
        .error{color:green;}
        

    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> 
        <input type="text" name="nombre" placeholder="Escribe aqui el nombre" id="">
        <?php if(!empty($errorNombre)): ?>
            <div class="error"><?php echo $errorNombre; ?></div>
        <?php endif; ?>
        <br>
        <input type="texto" name="email" placeholder="Escribe tu correo" id=""> 
        <?php if(!empty($errorCorreo)): ?>
            <div class="error"><?php echo $errorCorreo; ?></div>
        <?php endif; ?>
        <br>
        <input type="submit" name="submit" value="Enviar formulario" >

        
       <?php if(!empty($errores)): ?>
            <?php echo $errores; ?>
        <?php endif; ?> 
    </form>
</body>
</html>
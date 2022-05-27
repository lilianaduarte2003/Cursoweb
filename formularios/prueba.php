<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Prueba formulario</h1>
    <form action="" method="get"> <!--Guarda el valor que le hemos dado en el imput y aparece en la parte de arriba en el navegador -->
        <input type="text" placeholder="Escribe tu nombre" name="nombre" id=""> <!--placeholde es dondo el cliente escribe -->
        <br>
        <input type="radio" name="sexo" value="mujer" id="mujeres"> <!--input= entrada -->
        <label for="mujeres">Mujer</label> <!--label for= id, van conetados  -->
        <label for="hombres">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombres"><!-- se clica y puedes escoger una opción -->
        <br>
        <select name="fecha" id="">
            <option value="2025">2025</option> <!--value= valor -->
            <option value="2026">2026</option>
            <option value="2027">2027</option>
        </select> <!-- desplegable -->
        <br>
        <input type="checkbox" name="terminos" id="terminos" value='ok'><!--checkbox: escoges solo uno; value= guarda ok   -->
        <label for="terminos">Aceptar términos</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
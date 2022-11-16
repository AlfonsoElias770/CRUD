<?php

$varinv = $_GET['idenv'];

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$direccion=$_GET['direccion'];
$cp=$_GET['cp'];
$correo=$_GET['correo'];

?>

<html>  
    <head>
    <link rel="stylesheet" href="index.css"/>
        <title>MODIFICAR</title>
    </head>
    <body style="background-color: gray">

    <div class="cont">
    <form class="for_c" action="modificar.php" method="get">
        
        ID
        <input type="text" name="idenv" value='<?php echo $varinv; ?>'>
        <br>
        Ingrese el nombre:
        <input type="text" name="nombre" value='<?php echo $nombre; ?>'>
        <br>
        Ingrese el apellido:
        <input type="text" name="apellido" value='<?php echo $apellido; ?>'>
        <br>
        Ingrese la direccion:
        <input type="text" name="direccion" value='<?php echo $direccion; ?>'>
        <br>
        Ingrese codigo postal:
        <input type="text" name="cp" value='<?php echo $cp; ?>'>
        <br>
        Ingrese el correo:
        <input type="text" name="correo" value='<?php echo $correo; ?>'>
        <br>
        <button type="submit">Enviar</button>
        </form>
        </div>    

        <br>
        <a href="selectividad.php">Ver registro</a>

    </body>
</html>
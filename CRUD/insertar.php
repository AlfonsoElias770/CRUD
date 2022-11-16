<?php

$servername="localhost";
$username="root";
$password="";
$dbname="trabajo";

if($_POST){

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];
$correo=$_POST['correo'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO cliente (nombre, apellido, direccion, cp, correo)
  VALUES ('".$nombre."', '".$apellido."', '".$direccion."', '".$cp."', '".$correo."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<strong>EXITO</strong>";
  } else {
    echo "<strong>ERROR</strong>" . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>

<html>
    <head>
    <link rel="stylesheet" href="index.css"/>
        <title>INSERTAR</title>
    </head>
    <body style="background-color: gray">
        
    <div>
    <form action="insertar.php" method="post">
        Ingrese el nombre:
        <input type="text" name="nombre">
        <br>
        Ingrese el apellido:
        <input type="text" name="apellido">
        <br>
        Ingrese la direccion:
        <input type="text" name="direccion">
        <br>
        Ingrese codigo postal:
        <input type="text" name="cp">
        <br>
        Ingrese el correo:
        <input type="text" name="correo">
        <br>
        <button type="submit">Enviar</button>
    </form>
    </div>

  <a href="selectividad.php">Ver informacion</a>

    </body>
</html>
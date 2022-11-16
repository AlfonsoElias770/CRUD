<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

    $varinv = $_GET['idenv'];

    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $direccion=$_GET['direccion'];
    $cp=$_GET['cp'];
    $correo=$_GET['correo'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}

        $sql = "UPDATE cliente SET nombre='".$nombre."', apellido='".$apellido."', direccion='".$direccion."', cp='".$cp."', correo='".$correo."' WHERE id=".$varinv;
		
	if($conn->query($sql) === TRUE){

        echo "EXITO AL MODIFICAR";

    }else{
        echo "ERROR". $conn->error;
    }
	$conn->close();

	echo "<br>";
	echo "<a href='selectividad.php'>Ver la actualizacion</a>";

?>




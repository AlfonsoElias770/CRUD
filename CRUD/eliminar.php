<?php

    $varinv = $_GET['idenv'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}
				
	$sql = "DELETE FROM cliente WHERE id=".$varinv;
		
	if($conn->query($sql) === TRUE){

        echo "EXITO AL BORRAR";

    }else{
        echo "ERROR". $conn->error;
    }
	$conn->close();

	echo "<br>";
	echo "<a href='selectividad.php'>Ver la actualizacion</a>";
	
?>
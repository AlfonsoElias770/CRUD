<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "trabajo";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
		}
				
	$sql = "SELECT * FROM cliente";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
	 
	echo "<div class='aqui' style='background-color: white'>"	;
	  echo "<table class='este'>";
	  echo "<tr style='background-color: blue'>";
	  echo "<th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>DIRECCION</th><th>C.P.</th><th>CORREO</th><th>MODIFICAR</th><th>ELIMINAR</th>";
	  echo "</tr>";
	  while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["direccion"]."</td><td>".$row["cp"]."</td><td>".$row["correo"]."</td>";
		echo "<td>
		<a href='./form.php?idenv=".$row["id"]."&nombre=".$row["nombre"]."&apellido=".$row["apellido"]."&direccion=".$row["direccion"]."&cp=".$row["cp"]."&correo=".$row["correo"]."'>MODIFICAR</a>
		</td>";
		echo "<td>
		<a href='./eliminar.php?idenv=".$row["id"]."'>ELIMINAR</a>
		</td>";
		echo "</tr>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	echo "</table>";
	echo "</div>";
?>

<html>
	<head>
	<link rel="stylesheet" href="index.css"/>
	</head>
	<body style="background-color: gray">
		<br>
		<a href="insertar.php" target="_blank">Insertar</a>
	</body>
</html>
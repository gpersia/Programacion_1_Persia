<html>
	<html lang="en" dir="ltr">
  		<head>
    		<meta charset="utf-8">
    		<title>EJERCICIO 5</title>
  		</head>
  	<body>
		<?php
    		$id=$_POST["id"];
    		$name=$_POST["nombre"];
    		$lname=$_POST["apellido"];
    		$dni=$_POST["documento"];
    		$age=$_POST["edad"];
    		$server="localhost";
    		$user="root";
    		$pass="ruloqueado";
   		 	$db="programacion1";
    		$connect=new PDO("mysql: host=$server;dbname=$db",$user,$pass);
    		$sql="select * from persona";
    			$runsql=$connect->prepare($sql);
    			$runsql->execute();
    		$record=array("id" => $id, "nombre" => $name, "apellido" => $lname, "documento" => $dni, "edad" => $age);
    		$sql = "UPDATE persona SET nombre= :nombre, apellido= :apellido, documento= :documento, edad= :edad WHERE id= :id";
    			$runsql=$connect->prepare($sql);
    			$runsql->execute($record);
    		header('Location: ejercicio5.php');
     	?>
	</body>
</html>
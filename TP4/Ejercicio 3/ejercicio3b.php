<?php
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
		$record=array("nombre" => $name, "apellido" => $lname, "documento" => $dni, "edad" => $age);
  		$sql= "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre,:apellido,:documento,:edad)";
  			$runsql=$connect->prepare($sql);
  			$runsql->execute($record);
  		header('Location: ejercicio3.php');
  exit();
?>
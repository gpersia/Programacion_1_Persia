<?php
	$server="localhost";
	$user="root";
	$pass="ruloqueado";
	$db="programacion1";
		$connect=new PDO("mysql: host=$server;dbname=$db",$user,$pass);
			$sql="select * from persona";
				$runsql=$connect->prepare($sql);
				$runsql->execute();
	while($fila=$runsql->fetch(PDO::FETCH_ASSOC)){
  		echo $fila;
	}
	$record=array(array("nombre" => "Agustin", "apellido" => "Suarez", "documento" => "36258798", "edad" => "24"),
                 array("nombre" => "Sebastian", "apellido" => "Gutierrez", "documento" => "40258726", "edad" => "21"),
                 array("nombre" => "Tomas", "apellido" => "Arauco", "documento" => "30255411", "edad" => "27"));
	foreach($record as $rec){
  		$sql= "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre,:apellido,:documento,:edad)";
 			$runsql=$connect->prepare($sql);
  			$runsql->execute($rec);
	}
	die();
?>
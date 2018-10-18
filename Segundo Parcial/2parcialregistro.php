<?php
	$server="localhost";
	$user="root";
	$pass="ruloqueado";
	$db="programacion1";
	$connect=new PDO("mysql:host=$server;dbname=$db",$user,$pass);
	$user1=$_POST['usuario'];
	$pass1=$_POST['contraseña'];
	$params=array('usuario'=>$user1,'clave'=>$pass1);
	$sql="INSERT INTO usuario (usuario, clave, habilitado, rol) VALUES (:usuario, :clave, 1, 'user')";
	$runsql=$connect->prepare($sql);
	$runsql->execute($params);
	header('Location: 2parcialinicio.html');
?>
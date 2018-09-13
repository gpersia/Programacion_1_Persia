<?php
	$user=$_POST[user];
	$pass=$_POST[pass];
	$arr = array("Nombre" => "Agustin", "Usuario" => "aperez", "Email" => "aperez@gmail.com", "Contraseña" => "agus123");
	$arr1 = array("Nombre" => "Esteban", "Usuario" => "earizu", "Email" => "earizu@gmail.com", "Contraseña" => "esteban123");
	$arr2 = array("Nombre" => "Gianluca", "Usuario" => "gpersia", "Email" => "gpersia1998@gmail.com", "Contraseña" => "gian123");
	$arr3 = array("Nombre" => "Andres", "Usuario" => "amoreno", "Email" => "amoreno@gmail.com", "Contraseña" => "andres123");
	$arreglo = array_merge($arr,$arr1,$arr2,$arr3);
		if ($arreglo[$user][0]==$pass){
        	$email=$arreglo[$user][1];
        	echo "<br><h1>Ingreso correcto</h1>";
        	echo "<br>Usuario: $user";
        	echo "<br>Contraseña: $pass";
        	echo "<br>Email: $email";
    	}else{
        	echo "<h1>Ingreso incorrecto</h1>";
    	}
 ?>
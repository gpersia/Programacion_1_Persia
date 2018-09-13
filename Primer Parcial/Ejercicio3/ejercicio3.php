<?php
	$arr=array['Nombre']="Agustin";
	$arr=array['Usuario']="aperez"
	$arr=array['Contraseña']="agus123";
	$arr=array['Email']="agusperez@gmail.com";
	$arr1=array['Nombre']="Esteban";
	$arr1=array['Usuario']="earizu";
	$arr1=array['Contraseña']="esteban123";
	$arr1=array['Email']="estebanarizu@gmail.com";
	$arr2=array['Nombre']="Emiliano";
	$arr2=array['Usuario']="ebustos";
	$arr2=array['Contraseña']="emi123";
	$arr2=array['Email']="emibustos@gmail.com";
	$arr3=array['Nombre']="Gianluca";
	$arr3=array['Usuario']="gpersia"
	$arr3=array['Contraseña']="gian123";
	$arr3=array['Email']="gpersia1998@gmail.com";
	$arr4 = array_merge($arr,$arr1,$arr2,$arr3);
	foreach ($arr4 as $item => $value) {
		if ($arr4[nombre]==$_GET[usuario]&&$arr4[clave]==$_GET[clave]) {
			echo $item .": ". $value ."<br>";
		}
	}
 ?>
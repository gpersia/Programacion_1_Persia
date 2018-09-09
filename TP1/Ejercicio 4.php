<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 4</title>
</head>
<body>
	<h1>PUNTO A</h1>
		<?php
			$string="10,20,30,40,50,60,70,80,90,100";
			echo "Valor de la string: $string";
			$arr=explode(",", $string);
			echo "<pre>";
			echo "Valor del arreglo: $arr";
			print_r($arr);
			echo "<?pre>";
		?>
	<h1>PUNTO B</h1>
		<?php
			$arr1=[10,20,30,40,50,60,70,80,90,100];
			echo "<pre>";
			echo "Valores del arreglo: $arr1";
			print_r($arr1);
			echo "</pre>";
			$string1=implode(",", $arr1);
			echo "El valor de la string es: $string1";
		?>
</body>
</html>
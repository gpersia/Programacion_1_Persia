<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 7</title>
</head>
<body>
	<h1>Ejercicio 7</h1>
		<?php
			$arr=array();
			for ($i=0; $i < 20; $i++) { 
				$num=rand(1,30);
				array_push($arr, $num);
			}
			echo "<pre>";
			echo "Arreglo: \n";
			print_r($arr);
			echo "</pre>";
		?>
	<h6>PUNTO A</h6>
		<?php
			echo "<pre>";
			sort($arr);
			echo "<br> Arreglo Ordenado: \n";
			print_r($arr);
			echo "</pre>";
		?>
	<h6>PUNTO B</h6>
		<?php
			echo "<pre>";
			echo "<br> b. Arreglo partido al medio: \n";
			print_r(array_chunk($arr, ceil(count($arr)/2)));
			echo "</pre>";
		?>
</body>
</html>
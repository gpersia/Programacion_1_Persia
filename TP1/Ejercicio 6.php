<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 6</title>
</head>
<body>
	<h1>RESOLUCION</h1>
		<?php
			$arr=array();
			for ($i=0; $i < 15; $i++) { 
				$numsiguiente=rand(1,50);
				array_push($arr, $numsiguiente);
			}
			$arr1=array_unique($arr);
			echo "<pre>";
			echo "Elementos arreglo 1: \n";
			print_r($arr);
			echo "<br> Elementos arreglo sin duplicados: \n";
			print_r($arr1);
			echo "<?pre>";
		?>
</body>
</html>
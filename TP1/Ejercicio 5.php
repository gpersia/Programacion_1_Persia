<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 5</title>
</head>
<body>
	<h1>RESOLUCION</h1>
		<?php
			$arr=array();
			$z<=rand(5,15);
			while ($z<15) {
				$numsiguiente=rand(1,100);
				if (in_array($numsiguiente, $arr)) {
					continue;
				}
				else{
					array_push($arr, $numsiguiente);
					$z++;
				}
			}
			echo "a. Cantidad de elementos que tiene el arreglo: ".count($arr);
			echo "<br> b. Elementos del arreglo: ";
			echo "<pre>";
			print_r($arr);
			echo "<?pre>";
			echo "<br> c. Máximo: ", max($arr),"<br> Mínimo: ", min($arr);
			$prom=array_sum($arr)/count($arr);
			echo "<br><br> d. El promedio es: $prom";
			if (in_array(20, $arr)) {
				echo "<br><br> e. El número 20 se encuentra en el arreglo";
			}else echo "<br><br> e. El número 20 no se encuentra en el arreglo";
		?>
</body>
</html>

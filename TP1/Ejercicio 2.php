<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 2</title>
</head>
<body>
	<h1>PUNTO A</h1>
	<?php
		$arreglo=[0, 2, 5, 8, "salió", "bien"];
		echo "<pre>";
		echo "Arreglo Vectorial \n";
		print_r($arreglo);
		echo "</pre>";  
	?>
	<h1>PUNTO B</h1>
	<?php
		$precio="USD2500";
		$arr['motherboard']="GIGABYTE GAMER PRO";
		$arr['cpu']="INTEL CORE I9 8800K";
		$arr['ram']="CORSAIR VENGEANCE 16GB 2366MHZ";
		$arr['psu']="EVGA 1500W";
		$arr['gpu']="NVIDIA GEFORCE RTX 2080Ti X2 SLI";
		$arr['gabinete']="JALATEC";
		$arr['almacenamiento1']="WD 3TB";
		$arr['almacenamiento2']="SAMSUNG SSD 1TB";
		$arr['precio']="$precio";
		echo "<pre>";
		echo "Arreglo Asociativo \n";
		print_r($arr);
		echo "</pre>";
	?>
</body>
</html>
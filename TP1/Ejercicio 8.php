<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 8</title>
</head>
<body>
	<?php
		$filas=5;
		$columnas=5;
		$z=0;
	?>
	<h1>RESOLUCION</h1>
		<table border="1">
			<?php
				for ($i=0; $i < $filas; $i++) { 
					echo "<tr>";
					for ($j=0; $j < $columnas; $j++) { 
						echo "<td>",$z,"</td>";
						$z++;
					}
					echo "</tr>";
				}	
			?>
		</table>
</body>
</html>
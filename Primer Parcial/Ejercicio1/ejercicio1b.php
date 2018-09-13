<!DOCTYPE html>
<head>
	<title>PRIMER PARCIAL</title>
</head>
<body>
	<h1>Ejercicio 1b</h1>
		<form action="ejercicio1c.php" method="post">
			<?php
				if ($_POST['texto']<5) {
					$_POST['texto']=5;
				}
				for ($x=0; $x < $_POST['texto']; $x++) { 
		  			echo "Valor:".++$n." ";
		  			echo "<input type='number' name='texto$x'>";
		 		}
			?>
			<input type="submit" value="Enviar">
		</form>
</body>
</html>
<html>
<head>
	<title>EJERCICIO 3</title>
</head>
<body>
<?php
if (empty($_FILES['file']['name'])) {
	echo "No se a recibido ningun archivo";
} else {
	$file1 = $_FILES['file']['tmp_name'];
	$file2 = "Importados/" . $_FILES['file']['name'];
	copy($file1, $file2);
	$file = fopen($file2, "r");
	while ($line = fgets($file)) {
		echo "El archivo se a copiado en el directorio: Importados<br>El contenido del archivo es:<br>".$line;
	}
}	
?>
<form action="ejercicio3.html" method="get">
    <br><br><input type="submit" value="back">
</form>
</body>
</html>
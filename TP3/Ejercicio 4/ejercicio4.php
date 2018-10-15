<html>
<head>
	<title>EJERCICIO 4</title>
</head>
<body>
<?php  

if (empty($_FILES['file']['name'])) {
	echo "No se a recibido ningun archivo";
} else {

	if ($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png") {

		$file1 = $_FILES['file']['tmp_name'];
		$file2 = "Importados/" . $_FILES['file']['name'];
		copy($file1, $file2);
		echo "La imagen se ha copiado en el directorio: Importados";

		$arr = scandir('Importados');
		unset($arr[0],$arr[1]);
		foreach ($arr as $value){
        echo "<br><br>".$value."<br><img src='Importados/".$value."'><br>";
        }			
	} else {
		echo "El archivo recibido no es una imagen";
	}
}

?>
<form action="ejercicio4.html" method="get">
    <br><br><input type="submit" value="back">
</form>
</body>
</html>
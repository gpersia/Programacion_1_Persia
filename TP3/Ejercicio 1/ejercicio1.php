<html>
<head>
	<title>EJERCICIO 1</title>
</head>
<body>	
	<?php
		echo "File Received: <br><br>";
		if (empty($_FILES['file']['name'])) {
    		echo "No se recibio ningun archivo <br><br>";
		}else{
   			$file=fopen($_FILES['file']['tmp_name'],"r");
   			while ($ar = fgets($file)) {
   				echo $ar."<br><br>";
   			}
   			fclose($file);
		}

	?>
<form action="ejercicio1.html" method="get">
    <br><br><input type="submit" value="back">
</form>
</body>
</html>
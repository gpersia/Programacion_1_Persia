<html>
<head>
    <title>EJERCICIO 2</title>
</head>
<body>
    
<?php
if (empty($_FILES['file']['name'])) {
    echo "No se recibio ningun archivo";
}else {
    echo '<table border="5">';
    $file = fopen($_FILES['file']['tmp_name'], "r");
    $cant_filas = 0;
    while (!feof($file) && $cant_filas < 100) {
        $cant_filas += 1;
        $datos = fgets($file);
        echo "<tr><td>" . str_replace(';', '</td><td>', $datos) . '</td></tr>';
    }
    echo '</table>';
    fclose($file);
}
?>
<form action="ejercicio2.html" method="get">
    <br><br><input type="submit" value="back">
</form>
</body>
</html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<body>
<?php
session_start();   
if (empty($_SESSION['usr'])|empty($_SESSION['pass'])) {
  	header('location: error.html');
  }
?>
<header class="encabezado">
	<?php
	echo "<h1>".$_SESSION['usr']."</h1>"; 
	?>
</header>
<?php
$date_h = date('Y-m-d H:i:s')." ; ejercicio6b.php";
$_SESSION['date_h'] = $date_h;
$archivo = fopen('date.txt', 'w+');
fwrite($file, $_SESSION['date_h'].PHP_EOL);
fwrite($file, $_SESSION['date_1'].PHP_EOL);
fwrite($file, $_SESSION['date_2'].PHP_EOL);
fwrite($file, $_SESSION['date_3'].PHP_EOL);
fclose($file);  
?>
<a href="pagina1.php">Page 1</a><br>
<a href="pagina2.php">Page 2</a><br>
<a href="pagina3.php">Page 3</a><br><br>
<form action="ejercicio6.html">
	<input type="submit" name="volver" value="Sign out">
</form>
</body>
</html>
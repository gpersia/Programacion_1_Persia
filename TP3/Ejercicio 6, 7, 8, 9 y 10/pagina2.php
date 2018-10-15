<html>
<head>
	<title>PAGE 2</title>
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<body>
<?php
session_start(); 
if (empty($_SESSION['usr'])|empty($_SESSION['pass'])) {
  	header('location: error.html');
  }  
echo "<h1>".$_SESSION['usr']."</h1>"; 
$date_2 = date('Y-m-d H:i:s')." ; pagina1.php";
$_SESSION['date_2'] = $date_2;
$file = fopen('date.txt', 'w+');
fwrite($file, $_SESSION['date_h'].PHP_EOL);
fwrite($file, $_SESSION['date_1'].PHP_EOL);
fwrite($file, $_SESSION['date_2'].PHP_EOL);
fwrite($file, $_SESSION['date_3'].PHP_EOL);
fclose($file); 
?>
<a href="pagina1.php">Page 1</a><br>
<a href="pagina3.php">Page 3</a><br>
<a href="ejercicio6b.php">HOME</a><br>
</body>
</html>
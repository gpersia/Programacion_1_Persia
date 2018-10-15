<html>
<head>
	<title>EJERCICIO 5</title>
</head>
<body>
<?php
session_start();
$_SESSION['text7'] = $_POST['text7'];
$_SESSION['text8'] = $_POST['text8'];
$_SESSION['text9'] = $_POST['text9'];
echo "<h1>Los datos ingresados son:</h1>";
echo "Text 1: ".$_SESSION['text1']."<br>";
echo "Text 2: ".$_SESSION['text2']."<br>";
echo "Text 3: ".$_SESSION['text3']."<br>";
echo "Text 4: ".$_SESSION['text4']."<br>";
echo "Text 5: ".$_SESSION['text5']."<br>";
echo "Text 6: ".$_SESSION['text6']."<br>";
echo "Text 7: ".$_SESSION['text7']."<br>";
echo "Text 8: ".$_SESSION['text8']."<br>";
echo "Text 9: ".$_SESSION['text9'];
?>
</body>
</html>
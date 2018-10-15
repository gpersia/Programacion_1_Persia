<html>
<head>
	<title>EJERCICIO 5</title>
</head>
<body>
<?php 
session_start();
$_SESSION['text1']=$_POST['text1'];
$_SESSION['text2']=$_POST['text2'];
$_SESSION['text3']=$_POST['text3'];
?>
<form action="ejercicio5b.php" method="POST" enctype="multipart/form-data">
 	Text 4: <input type="text" name="text4">
 	Text 5: <input type="text" name="text5">
 	Text 6: <input type="text" name="text6">
 	<br><br><input type="submit" name="send" value="send text">
</form>
</body>
</html>
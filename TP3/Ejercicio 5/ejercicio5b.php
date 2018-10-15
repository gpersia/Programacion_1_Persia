<html>
<head>
	<title>EJERCICIO 5</title>
</head>
<body>
<?php 
session_start();
$_SESSION['text4']=$_POST['text4'];
$_SESSION['text5']=$_POST['text5'];
$_SESSION['text6']=$_POST['text6'];
?>
<form action="ejercicio5c.php" method="POST" enctype="multipart/form-data">
 	Text 7: <input type="text" name="text7">
 	Text 8: <input type="text" name="text8">
 	Text 9: <input type="text" name="text9">
 	<br><br><input type="submit" name="send" value="send text">
</form>
</body>
</html>
<html>
	<html lang="en" dir="ltr">
  		<head>
    		<meta charset="utf-8">
    		<title>EJERCICIO 4</title>
  		</head>
  	<body>
    	<?php
    		$var=$_GET["id"];
    		$server="localhost";
    		$user="root";
    		$pass="ruloqueado";
    		$db="programacion1";
    		$connect=new PDO("mysql: host=$server;dbname=$db",$user,$pass);
    		$sql="select * from persona";
    		$runsql=$connect->prepare($sql);
    		$runsql->execute();
				$record=array("id" => $var);
				$sql="DELETE FROM persona WHERE id = :id";
         		$runsql = $connect->prepare($sql);
          		$runsql->execute($record);
    		header('Location: ejercicio4.php');
     	?>
  </body>
</html>
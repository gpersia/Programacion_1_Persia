<html>
	<html lang="en" dir="ltr">
  		<head>
    		<meta charset="utf-8">
    		<title>EJERCICIO 5</title>
  		</head>
  	<body>
		<form action="ejercicio5b.php" method="post">
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
					while($fila=$runsql->fetch(PDO::FETCH_ASSOC)){
  						foreach($fila as $filaa){
    				if($fila['id']==$var){
      					echo "ID: ";
      						echo "<input type=\"text\" name=\"id\" value=\"$fila[id]\">";
      						echo "<br>";
      					echo "Name:";
      						echo "<input type=\"text\" name=\"nombre\" value=\"$fila[nombre]\">";
      						echo "<br>";
      					echo "Last Name: ";
      						echo "<input type=\"text\" name=\"apellido\" value=\"$fila[apellido]\">";
      						echo "<br>";
      					echo "DNI: ";
      						echo "<input type=\"text\" name=\"documento\" value=\"$fila[documento]\">";
      						echo "<br>";
      					echo "Age: ";
      						echo "<input type=\"text\" name=\"edad\" value=\"$fila[edad]\">";
      						echo "<br>";
      					break;
    				}
  						}
					}
     		?>
		<input type="submit" name="datos" value="Send">
   		</form>
  	</body>
</html>
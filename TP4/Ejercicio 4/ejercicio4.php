<html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>EJERCICIO 4</title>
    </head>
  <body>
    <table border="1">
      <?php
        $server="localhost";
        $user="root";
        $pass="ruloqueado";
        $db="programacion1";
        $connect=new PDO("mysql: host=$server;dbname=$db",$user,$pass);
        $sql="select * from persona";
        $runsql=$connect->prepare($sql);
        $runsql->execute();
          while($fila=$runsql->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            foreach($fila as $filaa){
            echo "<td>";
            echo $filaa;
            echo "</td>";
            }
            echo "<td>";
            echo "<a href='ejercicio4a.php?id=".$fila['id']."'>Delete Record</a>";
            echo "</tr>";
          }
      ?>
    </table>
  </body>
</html>
<html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>EJERCICIO 3</title>
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
            echo "</tr>";
          }
      ?>
    </table><br><br>
  <a href="ejercicio3a.html">Add record to PERSONA</a>
  </body>
</html>
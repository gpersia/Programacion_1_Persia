<!DOCTYPE html>
<head>
    <title>PRIMER PARCIAL</title>
</head>
<body>
    <h1>Ejercicio 1c</h1>
        <?php
            echo "<tabla>";
            $todo=count($_POST);
            $tab=ceil($todo/2);
            for ($x=0; $x < $tab; $x++) { 
                echo "<tr>";
                for ($y=0; $y < $tab; $y++) { 
                    $pos=$y+$tab*$x;
                    if (isset($_POST['texto'.$pos])) {
                        echo "<td>".$_POST['texto'.$pos]."</td>";
                    }
                }
                echo "</tr>";
              }
              echo "</tabla>";
              echo "<br>";
              $promedio=0;
              foreach ($_POST as $valor) {
                    $promedio+=(int)$valor;
                }
              echo "Máximo: ".max($_POST)."<br>";
              echo "Mínimo: ".min($_POST)."<br>";
              echo "Promedio: ".$promedio/count($_POST)."<br>";
              echo "</br>";  
        ?>
</body>
</html>
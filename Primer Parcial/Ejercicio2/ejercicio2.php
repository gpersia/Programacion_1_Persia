<?php
$mes=$_GET['month'];
$mes1=['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$dia=$_GET[day];

for($x=1;$x<13;$x++) {
    if ($mes == $mes1[$x]) {
         $mes2=$x;
         break;
    }
}
if ($mes2<10){
    $mes2='0'.$mes2;
}

if ($dia<10){
    $dia='0'.$dia;
}

    if ($_GET[check]==1){
        echo "Hoy es $_GET[day] de $_GET[month] de $_GET[year]";
    }else{
        echo "Hoy es el $dia/$mes2/$_GET[year]";
    }
?>
<?php
$month=$_GET['mes'];
$mes=['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$day=$_GET[dia];

for($i=1;$i<13;$i++) {
    if ($month == $month1[$i]) {
         $month2=$i;
         break;
    }
}
if ($month2<10){
    $month2='0'.$month2;
}

if ($day<10){
    $day='0'.$day;
}

    if ($_GET[check]==1){
        echo "Hoy es el $_GET[dia] de $_GET[mes] de $_GET[year]";
    }else{
        echo "Hoy es el $dia/$mes1/$_GET[year]";
    }
?>
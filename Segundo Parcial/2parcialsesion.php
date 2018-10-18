<?php session_start(); ?>
<html>
  <head>
    <title>SEGUNDO PARCIAL</title>
  </head>
  <body>
    <?php
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $server="localhost";
        $user1="root";
        $pass1="ruloqueado";
        $db="programacion1";
        $connect=new PDO("mysql:host=$server;dbname=$db",$user1,$pass1);
        $params=array('usuario'=>$user,'clave' => $pass);
        $sql="SELECT * FROM usuario WHERE usuario=:usuario AND clave=:clave";
            $runsql=$connect->prepare($sql);
            $runsql->execute($params);
        $count=$runsql->rowCount();
        $result=$runsql->fetch(PDO::FETCH_ASSOC);
        if($count>0 and $result["habilitado"] == 1){
            $_SESSION["user"] = $_POST["user"];
            $_SESSION["login"] = 1;
            $_SESSION["rol"] = $result["rol"];
             if($result["rol"] == "user") {
                 header('Location: 2parcialhome.php');
             } 
                else {
                 header('Location: 2parcialadmin.php');
             }
             exit;
        }
        else{
             header('Location: 2parcialinicio.html');
             exit;
        }
    ?>
  </body>
</html>

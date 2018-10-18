<?php session_start(); ?>
<html>
  <head>
    <title>SEGUNDO PARCIAL</title>
  </head>
  <body>
    <?php
      if(empty($_SESSION['login']) or $_SESSION["rol"] != "user"){
        header('Location: 2parcialinicio.html');
        exit;
      }
      echo "Username: ".$_SESSION['user'];
     ?>
  </body>
</html>

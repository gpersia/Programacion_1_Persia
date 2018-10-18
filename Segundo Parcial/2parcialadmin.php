<?php
	session_start();
	if($_SESSION["rol"] != "admin"){
    	header('Location: 2parcialinicio.html');
    	exit;
	}
	echo "MANAGEMENT";
?>

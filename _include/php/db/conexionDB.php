<?php
try {
$con = new PDO('mysql:host=localhost;dbname=app_itse', 'root', '');
#$con = new PDO('mysql:host=localhost;dbname=app_itse', 'pepe', 'ccitsecentro10');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
   			echo 'Error al conectar Data_BASE '.$e->getMessage();
	}
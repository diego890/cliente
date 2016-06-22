<?php 
	try {
		$bdd= new PDO("mysql:host=localhost; dbname=basecliente","root", "");
		
	} catch (Exception $e) {
		die("ERROR".$e->getMesage());
	}
 ?>
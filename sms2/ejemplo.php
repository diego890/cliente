<?php
	 include "conn.php";
	require("class-Clockwork.php");

  if ($_POST['valor']){

		$req=$bdd->prepare("insert into var(valor) values (:valor)");
		$req->execute(array (
				'valor'=>$_POST['valor']

			));

				
		$apikey = "3e1d8380de33f155be42881e2cac51b76fd56046";
		$clockwork = new Clockwork($apikey);

		$message = array('to'=> '51949511552', 'message' => 'Hay un nuevo registro');
		$done = $clockwork->send($message);
	}


?>
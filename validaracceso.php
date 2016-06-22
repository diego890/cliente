<?php 
	

	if (isset($_POST['valor'])){

		$codigo -> execute(array(
			'valor'=>$_POST['valor'];
			));

		
		echo $codigo;
	}

 ?>
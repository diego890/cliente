<?php 
	$con =mysqli_connect("localhost","root","","basecliente");
	$codigo = $_POST['cboCodigo'];
	$fecha  = $_POST['dtfecha'];
	$hentrada  = $_POST['tmentrada'];
	$hsalida  = $_POST['tmsalida'];

	
	$sql = "insert into autorizados(id_persona, fecha, hora_en, hora_sa) 
			values ('".$codigo."','".$fecha."','".$hentrada."','".$hsalida."')";	
	$res = mysqli_query($con,$sql);	
	echo "<script> alert('Autorizacion Registrada');
        window.location='autorizacion.php'</script>";   
 ?>
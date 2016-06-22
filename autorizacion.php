<?php 
	include("conexion.php");
	include("clase_autorizacion.php");

	$autorizacion= new Autorizacion();

	if(isset($_GET['eliminar'])){

	Autorizacion::borrar($_GET['eliminar']+ 0);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autorization</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	
</head>
<?php require 'menu.php'; ?> <br><br>
<body>

	<header>
		<div class="container">
			<h1 class="text-primary">AUTORIZACION DE USUARIOS</h1>		
		</div>
	</header><br><br>

	<div class="container">
		<div class="row">
			<form action="guardar_autorizado.php" method="POST" class="form-inline">
				<div class="form-group">
					<label class=" "for="entrada">Codigo :</label>
					<select name="cboCodigo" class="form-control">
						<option value="">Selecciones Codigo</option>
						<?php 
						$con =mysqli_connect("localhost","root","","basecliente");
						$sql = mysqli_query($con, "select id_persona,dni from persona order by dni asc");
						while($row=mysqli_fetch_row($sql))
							echo "<option value=".$row[0].">".utf8_decode($row[1])."</option>";
						 ?>						
					</select>
				</div><br><br>
				<div class="form-group">
					<label class=" "for="entrada">Fecha :</label>
					<input  name="dtfecha" class="form-control" type="date">
				</div>
				<div class="form-group">
					<label for="entrada">Hora de entrada :</label>
					<input class="form-control" name="tmentrada" type="time" >
				</div>
				
				<div class="form-group">
				
					<label  for="salida">Hora de salida:</label>
					<input class="form-control" id="salida" name="tmsalida"type="time">
				</div>	
				<button class="btn btn-primary" type="submit">Agregar autorizacion</button>
			</form>
		</div><br><br>
		<h2 class="text-success text-center">DATOS DE USUARIOS REGISTRADOS</h2>
		<form method="POST" action="mpersona.php">
		<div class="row">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<tr class="danger">
						<th>Codigo</th>
						<th>Dni</th>
						<th>Nombre</th>
						<th>Fecha</th>
						<th>Hora Entrada</th>
						<th>Hora Salida</th>
						<th>Anular</th>
					</tr>
					<tbody>
						<?php
		 					$autorizacion = Autorizacion::lista();
		 					foreach($autorizacion as $veh){
		 						$id_autorizado = $veh['id_autorizado'];
								echo <<<FILA
						 		<tr>
						 			<td>{$veh['id_autorizado']}</td>
						 			<td>{$veh['dni']}</td>
						 			<td>{$veh['nombre']}</td>
						 			<td>{$veh['fecha']}</td>		 			
						 			<td>{$veh['hora_en']}</td>
						 			<td>{$veh['hora_sa']}</td>
									<td><a href='autorizacion.php?eliminar={$id_autorizado}' class="btn btn-danger pull-right subfuente">Anular</a></td>
								</tr>


FILA;
		 										}

						?>
					</tbody>
				</table>		
			</div>
		</div>
		</form>

	</div>
<!-- controles soportados por class="form-control"
	text,password,datetime,date,month,time,week,number,email,url,search,tel,color -->


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
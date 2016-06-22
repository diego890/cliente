
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
			<h1 class="text-primary">PRESTAMOS REALIZADOS</h1>		
		</div>
	</header><br><br>

	<div class="container">
		<div class="col-md-6">
			<h2 class="text-success text-center">Ingreso de equipos</h2>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<tr class="danger">
						<th>DNI</tH>
						<th>CODIGO EQUIPO</th>
						<th>HORA DE INGRESO</th>
						<th>TIPO DE OPERACION</th>
					</tr>				
				</table>
			</div>
		</div>

		<div class="col-md-6 " >
			<h2 class="text-success text-center">Salida de equipos</h2>
			<div class="table-responsive">
				<table class="table table-bordered table-hover " align="right">
					<tr class="danger">
						<th>DNI</tH>
						<th>CODIGO EQUIPO</th>
						<th>HORA DE INGRESO</th>
						<th>TIPO DE OPERACION</th>
					</tr>				
				</table>
			</div>
		</div>
	</div>
<!-- controles soportados por class="form-control"
	text,password,datetime,date,month,time,week,number,email,url,search,tel,color -->


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
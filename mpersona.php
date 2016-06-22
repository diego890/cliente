<?php 
include("conexion.php");
include("clase_persona.php");

$persona = new Persona();

if($_POST){

	$persona->id_persona = $_POST['txtId_Persona'];
	$persona->nombre = $_POST['txtNombre'];
	$persona->dni = $_POST['txtDni'];
	$persona->email = $_POST['txtEmail'];
	$persona->comentario = $_POST['txtComentario'];
	$persona->guardar();

}
else if(isset($_GET{'editar'}))
{
	$persona->id_persona = $_GET['editar'] + 0;
	$persona->cargar();
}
else if(isset($_GET['eliminar'])){

	Persona::borrar($_GET['eliminar']+ 0);
}
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>

	<script type="text/javascript">
    function valideKey(evt)
    {
        var code = (evt.which) ? evt.which : evt.keyCode;
        if(code==8)
        {
            //backspace
            return true;
        }
        else if(code>=48 && code<=57)
        {
            //is a number
            return true;
        }
        else
        {
            return false;
        }
    }
</script>
<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">    

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

</head>
<body style="background:#F0FFFD">
	<?php require 'menu.php'; ?> <br><br>
	<div class="col-md-push-3 col-sm-6">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title subfuente text-center"><b>FORMULARIO REGISTRO DE USUARIOS DE EQUIPOS</b></h2>
	</div>
		<div class="panel-body">
			<form method="POST" action="mpersona.php">
				<div class="form-group">
                  <label for="id_persona">ID</label>
                  <input type="text" class="form-control" value="<?php echo $persona->id_persona; ?>" readonly name="txtId_Persona" required>
                </div>
                <div class="form-group">
                  <label for="apenom">Nombres y Apellidos</label>
                  <input type="text" class="form-control" value="<?php echo $persona->nombre; ?> "  name="txtNombre" required>
                </div>
                <div class="form-group">
                  <label for="dni">DNI</label>
                  <input type="text1" class="form-control" value="<?php echo $persona->dni; ?> " onkeypress="return valideKey(event);" name="txtDni" required>
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control" value="<?php echo $persona->email; ?> " name="txtEmail" required>
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input type="text" class="form-control" value="<?php echo $persona->comentario; ?> "  name="txtComentario" required>
                </div>                
                <a class="btn btn-success pull-left subfuente" href="mpersona.php">Nuevo</a>
                <button type="submit" class="btn btn-primary pull-right subfuente">Guardar</button>
            </form>

	</div>	
	</div>		
	</div>
	
	<div class="col-sm-offset-1 col-sm-10 ">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title subfuente text-center"><b>LISTADO DE USUARIOS DE EQUIPOS</b></h2>
	</div>	
		<div class="panel-body">
			<form method="POST" action="mpersona.php">
			<div class="form-group">
				<table class='table table-bordered table-hover' id="tablaPersonas">
					<tr>
					  <th class="text-center">ID</th>
                      <th class="text-center">Nombres y Apellidos</th>                     
                      <th class="text-center">DNI</th>
                      <th class="text-center">E-mail</th>
                      <th class="text-center">Descripción</th>  
                      <th class="text-center">Modificar</th>
                      <th class="text-center">Eliminar</th>
					</tr>
					<tbody>
						<?php
		 	$personas = Persona::lista();
		 	foreach($personas as $veh){

		 		$id_persona = $veh['id_persona'];

		 		echo <<<FILA
		 		<tr>
		 			<td>{$veh['id_persona']}</td>
		 			<td>{$veh['nombre']}</td>
		 			<td>{$veh['dni']}</td>		 			
		 			<td>{$veh['email']}</td>
		 			<td>{$veh['comentario']}</td>
					<td><a href='mpersona.php?editar={$id_persona}' class="btn btn-success pull-right subfuente">Modificar</a></td>
					<td><a href='mpersona.php?eliminar={$id_persona}' class="btn btn-danger pull-right subfuente">Eliminar</a></td>

				</tr>
FILA;
		 	}

		?>

					</tbody>
				</table>
			</div>
		</div>
	</div>	
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/etapa/filtro.js"></script>
</body>
</html>
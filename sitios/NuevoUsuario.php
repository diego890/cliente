<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">    
    <title>Registro de Usuario</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap theme -->
    
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>

</head>
<body role="document" style="background:#F0FFFD">    
        <header>
          <h1></h1>
        </header>   
        <div class="col-md-push-3 col-sm-6">  
              <h1><P ALIGN=center><font color="#0C6875"> REGISTRO DE USUARIO </font></p></h1><br><br> 
            <div class="panel-body">
              <form method="POST" action="../scripts/NuevoUsuario.php">
                <div class="form-group">
                  <label for="usuario">Nombre de usuario</label>
                  <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                </div>                
                <div class="form-group">
                  <label for="nombres">Nombres</label>
                  <input type="text" class="form-control" name="nombres" placeholder="Nombres" required>
                </div>
                <div class="form-group">
                  <label for="apellidos">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
                </div>                 
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                </div>  
                <div class="col-xs-offset-4.5 col-xs-6"> 
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
                <div class="col-xs-offset-4.5 col-xs-6"> 
                <a class="btn btn-success btn-block" href="../index.php">Cancelar</a>
                </div>
                
              </form>
            </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 </body>
</html>
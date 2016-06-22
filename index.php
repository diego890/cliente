<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
     
  <title>APP CLIENTE-SERVIDOR</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">    

</head>
<body style="background:#F0FFFD"><br><br><br><br>

  <div class="col-md-push-4 col-sm-4">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title subfuente text-center"><b>LOGIN</b></h2>
  </div>
  <div class="panel-body">
      <form class="form" action="scripts/IniciarSesion.php" method="POST"><br>
        <label for="txtUsuario" >Usuario</label>
        <input type="text" name="txtUsuario" class="form-control " placeholder="Usuario" required autofocus><br>
        <label for="txtPassword" >Contraseña</label>
        <input type="password" name="txtPassword" class="form-control " placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar
          </label>
        </div>
        <div class="col-xs-offset-4.5 col-xs-6">
            <button class="btn btn-success btn-block" type="submit">Ingresar</button>      
        </div>
        <div class="col-xs-offset-4.5 col-xs-6">       
            <a href="sitios/NuevoUsuario.php" class="btn btn-primary btn-block">Registrarse</a>     
        </div>   
      </form>
      </div>
      </div>
    </div>
    </body>
</html>

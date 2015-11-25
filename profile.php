<?php
include("models/security/control_sesion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MoonChaton</title>
  <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/jQuery.js"></script>
  <script type="text/javascript" src="js/controllers/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      updateProfile();
      $.ajaxSetup({"cache":false});
      /*setInterval("loadOldMessages()", 500);*/
    });
    </script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MoonChaton</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
    
        <li> <a href="models/security/logout.php" class="">Cerrar sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>


<div class="container">
  <div class="row ">
   <div class="col-md-4">
    <div class="list-group hidden-xs">
      <a href="dashboard.php" class="list-group-item ">
        <span class="glyphicon glyphicon-home"></span> Home
      </a>
      <a href="profile.php" class="list-group-item active"><span class="glyphicon glyphicon-user"></span> Perfil</a>
      <a href="friends.php" class="list-group-item "><span class="glyphicon glyphicon-th-large"></span> Amigos</a>
      <a href="groups.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span> Grupos</a>
      <a href="conversation.php" class="list-group-item"><span class="glyphicon glyphicon-comment"></span> Conversasiones</a>
      <a href="models/security/logout.php" class="list-group-item"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-info">
      <!-- Default panel contents -->
      <div class="panel-heading">Mi perfil</div>
      <div class="panel-body">
       <form method="post" action="" name="formProfile" id="formProfile">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="email" name="nombre" class="form-control " id="nombre" placeholder="">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido (s):</label>
          <input type="text" name="apellido" class="form-control " id="apellido" placeholder="">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" class="form-control " id="username" readonly="" value="<?php echo "$_SESSION[username]"?>">
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" name="email" class="form-control " id="email" placeholder="">
        </div>
        <div class="form-group">
          <label for="slogan">Eslogan: </label>
          <textarea class="form-control" name="slogan" id="slogan" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Foto:</label>
          <input type="file" name="avatar" id="avatar" >
        </div>
        <div class="form-groop">
          <button type="button" class="btn btn-primary btn-md" id="sendProfile">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>

  <div class="panel panel-success">
    <!-- Default panel contents -->
    <div class="panel-heading">Seguridad:</div>
    <div class="panel-body">
     <form method="post" action="">
      <div class="form-group">
        <label for="proyecto">Contraseña actual:</label>
        <input type="password" name="" class="form-control " id="" readonly="" value="********">
      </div>
      <div class="form-group">
        <label for="titulo">Nueva contraseña:</label>
        <input type="password" name="newPassword" class="form-control " id="newPassword" placeholder="">
      </div>
      <div class="form-group">
        <label for="titulo">Cofirmar nueva contraseña:</label>
        <input type="password" name="confirmNewPassword" class="form-control " id="confirmNewPassword" placeholder="">
      </div>
      <div class="form-groop">
        <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target=".bs-example-modal-sm">Actualizar Contraseña</button>
      </div>
    </form>

    <!--Modal-->
    <div class="modal fade bs-example-modal-sm" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <form method="post" action="">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="gridSystemModalLabel">Verificación: </h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="titulo">Confirmar contraseña anterior:</label>
                <input type="password" name="confirmNewPassword" class="form-control " id="confirmNewPassword" placeholder="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Actualizar contraseña</button>
            </div>
          </div><!-- /.modal-content -->
        </form>
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Modal-->

  </div>
</div>

</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
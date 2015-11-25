
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
    registerNewUser();
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
     <nav class="navbar navbar-inverse">
      <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
        <a class="navbar-brand" href="#">Bienvenido a MoonChaton</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
         <li><a href="index.php">Iniciar sesión</a></li>
         <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">Action</a></li>
           <li><a href="#">Another action</a></li>
           <li><a href="#">Something else here</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#">Separated link</a></li>
         </ul>
       </li>-->
     </ul>
   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>


<div class="container">
  <div class="row">
   <div class="col-md-4 col-md-offset-4">
    <form method="post" action="" class="" name="registryNewUserAccount">
      <h1>Registro</h1>
      <div class="form-group">
        <label for="username">Usuario: </label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Usuario" required="">
      </div>
      <div class="form-group">
        <label for="password">Contraseña: </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-success btn-md btn-block" id="newUser">Registrarse</button>
      </div>
      Ya soy usuario <a href="index.php" class="btn btn-link">Iniciar aquí</a>
    </form>
  </div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>



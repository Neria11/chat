<?php
include("models/security/control_sesion.php");
include("models/view_profile.php");
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
      <li> <a href="#" class=""><span class="label label-info">@<?php echo "$_SESSION[username]"; ?> </span></a></li>
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
      <a href="profile.php" class="list-group-item "><span class="glyphicon glyphicon-user"></span> Perfil</a>
      <a href="friends.php" class="list-group-item active"><span class="glyphicon glyphicon-th-large"></span> Amigos</a>
      <a href="groups.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span> Grupos</a>
      <a href="conversation.php" class="list-group-item"><span class="glyphicon glyphicon-comment"></span> Conversasiones</a>
      <a href="models/security/logout.php" class="list-group-item"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-info">
      <!-- Default panel contents -->
      <div class="panel-heading">Mis amigos</div>
      <div class="panel-body">
        <div class="row">

          <!--Amigo-->
          <div class="col-sm-6 col-md-4 col-lg-3">
           <div class="text-center ">
            <img src="<?php echo $avatar ?>" alt="" class="img-circle img-responsive">
            <h4>Sabino</h4>
            <p>"La vida es bella"</p>
            <p><a class="btn btn-success btn-xs" href="#" role="button"><span class="glyphicon glyphicon-comment"></span> Chat</a></p>
          </div>
        </div>
        <!--Amigo-->
        <!--Amigo-->
        <div class="col-sm-6 col-md-4 col-lg-3">
         <div class="text-center">
          <img src="<?php echo $avatar ?>" alt="" class="img-circle img-responsive">
          <h4>Sabino</h4>
          <p>"La vida es bella"</p>
          <p><a class="btn btn-success btn-xs" href="#" role="button"><span class="glyphicon glyphicon-comment"></span> Chat</a></p>
        </div>
      </div>
      <!--Amigo-->
      <!--Amigo-->
      <div class="col-sm-6 col-md-4 col-lg-3">
       <div class="text-center">
        <img src="<?php echo $avatar ?>" alt="" class="img-circle img-responsive">
        <h4>Sabino</h4>
        <p>"La vida es bella"</p>
        <p><a class="btn btn-success btn-xs" href="#" role="button"><span class="glyphicon glyphicon-comment"></span> Chat</a></p>
      </div>
    </div>
    <!--Amigo-->

  </div>
</div>
</div>


<!--Sugerencias de amigos-->
<div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Sugerencias</div>
  <div class="panel-body">
    <div class="row">

      <!--Amigo-->
      <div class="col-sm-6 col-md-4 col-lg-2">
       <div class="text-center">
        <img src="<?php echo $avatar ?>" alt="" class="img-responsive">
        <h4>Sabino</h4>
        <p>
          <small>"La vida es bella"</small>
        </p>
        <p><a class="btn btn-primary btn-xs" href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Agregar</a></p>
      </div>
    </div>
    <!--Amigo-->
    <!--Amigo-->
    <div class="col-sm-6 col-md-4 col-lg-2">
     <div class="text-center">
      <img src="<?php echo $avatar ?>" alt="" class="img-responsive">
      <h4>Sabino</h4>
      <p>
        <small>"La vida es bella"</small>
      </p>
      <p><a class="btn btn-primary btn-xs" href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Agregar</a></p>
    </div>
  </div>
  <!--Amigo-->
  <!--Amigo-->
  <div class="col-sm-6 col-md-4 col-lg-2">
   <div class="text-center">
    <img src="<?php echo $avatar ?>" alt="" class="img-responsive">
    <h4>Sabino</h4>
    <p>
      <small>"La vida es bella"</small>
    </p>
    <p><a class="btn btn-primary btn-xs" href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Agregar</a></p>
  </div>
</div>
<!--Amigo-->
<!--Amigo-->
<div class="col-sm-6 col-md-4 col-lg-2">
 <div class="text-center">
  <img src="<?php echo $avatar ?>" alt="" class="img-responsive">
  <h4>Sabino</h4>
  <p>
    <small>"La vida es bella"</small>
  </p>
  <p><a class="btn btn-primary btn-xs" href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Agregar</a></p>
</div>
</div>
<!--Amigo-->
<!--Amigo-->
<div class="col-sm-6 col-md-4 col-lg-2">
 <div class="text-center">
  <img src="<?php echo $avatar ?>" alt="" class="img-responsive">
  <h4>Sabino</h4>
  <p>
    <small>"La vida es bella"</small>
  </p>
  <p><a class="btn btn-primary btn-xs" href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Agregar</a></p>
</div>
</div>
<!--Amigo-->
<!--Amigo-->
<div class="col-sm-6 col-md-4 col-lg-2">
 <div class="text-center">
  <img src="<?php echo $avatar ?>" alt="" class="img-responsive">
  <h4>Sabino</h4>
  <p>
    <small>"La vida es bella"</small>
  </p>
  <p><a class="btn btn-primary btn-xs" href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Agregar</a></p>
</div>
</div>
<!--Amigo-->

</div>
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
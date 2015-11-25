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
        <li class="active"> <a href="models/security/logout.php" class="">Cerrar sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>


<div class="container">
  <div class="row ">
   <div class="col-md-4">
    <div class="list-group hidden-xs">
      <a href="dashboard.php" class="list-group-item active">
        <span class="glyphicon glyphicon-home "></span> Home
      </a>
      <a href="profile.php" class="list-group-item "><span class="glyphicon glyphicon-user"></span> Perfil</a>
      <a href="friends.php" class="list-group-item"><span class="glyphicon glyphicon-th-large"></span> Amigos</a>
      <a href="groups.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span> Grupos</a>
      <a href="conversation.php" class="list-group-item"><span class="glyphicon glyphicon-comment"></span> Conversasiones</a>
      <a href="models/security/logout.php" class="list-group-item "><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a>
    </div>
  </div>
  <div class="col-md-8">

    <div class="jumbotron text-center">
     <img src="img/paisaje.jpg" class="img-responsive" alt="">
     <h1>Bienvenido al super chat MoonChaton </h1>
     <p>

     </p>
   </div>
   <div class="panel panel-info">

    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">

      <!--Mensaje / Chat-->
      <div class="media">
        <div class="media-left media-middle">
          <a href="#">
            <img class="media-object" src="img/noavatar.png" alt="avatar" style="width:64px; height:64px;">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Sabino Neria</h4>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore modi atque minus quis mollitia, et officia quisquam, nam voluptate optio eius corporis eveniet ipsam nobis, qui dicta magnam facere nisi.
        </div>
      </div>
      <!--Mensaje / Chat-->
      
      <!--Mensaje / Chat-->
       <div class="media">
        <div class="media-left media-middle">
          <a href="#">
            <img class="media-object" src="img/noavatar.png" alt="avatar" style="width:64px; height:64px;">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Miguel cornejo</h4>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore modi atque minus quis mollitia, et officia quisquam, nam voluptate optio eius corporis eveniet ipsam nobis, qui dicta magnam facere nisi.
        </div>
      </div>
      <!--Mensaje / Chat-->

    </div>
  </div>


  <!--<div class="table-responsive">
    <table class="table table-hover">
      <tr class="info">
        <th>Campo1</th>
        <th>Campo2</th>
      </tr>
      <tr class="active">
        <td>Campo1</td>
        <td>Campo2</td>
      </tr>
      <tr class="active">
        <td>Campo1</td>
        <td>Campo2</td>
      </tr>
      <tr class="active">
        <td>Campo1</td>
        <td>Campo2</td>
      </tr>
      <tr class="active">
        <td>Campo1</td>
        <td>Campo2</td>
      </tr>
    </table>
  </div>-->

</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
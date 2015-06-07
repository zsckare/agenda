<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Resgistrarse</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-2">
 <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Agenda</a>
      <ul class="right hide-on-med-and-down">
  <li><a href="registrarse.php">Registrarse <i class="mdi-action-perm-identity small left"></i></a></li>
        <li><a href="#login" class="modal-trigger">Log-in<i class="mdi-action-input small left"></i></a></li>
      
      </ul>

      <ul id="nav-mobile" class="side-nav">
  <li><a href="registrarse.php">Registrarse <i class="mdi-action-perm-identity small left"></i></a></li>
        <li><a href="#login" class="modal-trigger">Log-in<i class="mdi-action-input small left"></i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
<div class="container">
	<div class="card">
		  <h4 class="center-align">Registrarse</h4>
  <div class="row">
    <form class="col s12" action="registrarse.php" method="post">
    	<div class="row">
        <div class="input-field col s12 m6">
          <input id="username" type="text" class="validate" name="nick">
          <label for="username">Usuario</label>
        </div>
                <div class="input-field col s12 m6">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m4">
          <input  id="first_name" type="text" class="validate" name="nombre">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="last_name" type="text" class="validate" name="paterno">
          <label for="last_name">Apellido Paterno</label>
        </div>
                <div class="input-field col s12 m4">
          <input id="materno" type="text" class="validate" name="materno">
          <label for="materno">Apellido Materno</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m6">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="password" type="password" class="validate" name="">
          <label for="password">Repetir Contraseña</label>
        </div>
      </div>
	<div class="row">
		<input type="submit" class="btn red darken-4 right" value="Registrarse">
	</div>
    </form>
  </div>
	</div>
</div>
<?php include 'loginmodal.php'; ?>
<?php 
  
  if(isset($_POST['nick'])){
    $nick=trim($_POST['nick']);
    $nombre=trim($_POST['nombre']);
    $paterno=trim($_POST['paterno']);
    $materno=trim($_POST['materno']);
    $email=trim($_POST['email']);
    $pass=trim($_POST['password']);


    include ("php/conexion.inc.php");
    $link=Conectarse();

    $insertar="INSERT INTO `agenda`.`usuarios` (`id_user` ,`nick` ,`nombre` ,`paterno` ,`materno` ,`email` ,`password`)VALUES (NULL , '$nick', '$nombre', '$paterno', '$materno', '$email', '$pass');";
    mysql_query($insertar)or die(mysql_error());
          echo '<script type="text/javascript">alert("REGISTRADO ");</script>';
  ?>
            <SCRIPT LANGUAJE="javascript">
              location.href="home.php";
            </SCRIPT>
          <?php
  }
 ?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>
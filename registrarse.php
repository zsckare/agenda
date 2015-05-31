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
	  <nav class="red darken-4">
    <div class="nav-wrapper container ">
      <a href="#" class="brand-logo">Agenda</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="registrarse.php">Registrarse</a></li>
        <li><a href="#login" class="modal-trigger">Log-in</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
                <li><a href="registrarse.php">Registrarse</a></li>
        <li><a href="">Log-in</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
<div class="container">
	<div class="card">
			
  <div class="row">
    <form class="col s12">
    	<div class="row">
        <div class="input-field col s12 m6">
          <input id="username" type="email" class="validate">
          <label for="username">Usuario</label>
        </div>
                <div class="input-field col s12 m6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m4">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Apellido Paterno</label>
        </div>
                <div class="input-field col s12 m4">
          <input id="materno" type="text" class="validate">
          <label for="materno">Apellido Materno</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m6">
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="password" type="password" class="validate">
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
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>
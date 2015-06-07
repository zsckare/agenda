<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Contactos</title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-2">
	  <?php 
    session_start();
    if(isset($_SESSION['u_user'])){

    }
    else{
      header("Location: index.php");
    }
  ?>
<?php include 'nav.php'; ?>
	<div class="container">
		<div class="card">
			<h4 class="center-align">Agregar un Nuevo Contacto</h4>
			<form action="crearEvento.php" method="post" class="">
				<div class="row">
					<div class="input-field col s6 m6">
						<label for="title">Nombre</label>
						<input type="text" name="nombre" id="title">
						
					</div>

				</div>
				<div class="row">
					<div class="input-field col s6 m6">
						
						<label for="place">Apellido Paterno</label>
						<input type="text" name="paterno" id="place">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6 m6">
						
						<label for="mat">Apellido Materno</label>
						<input type="text" name="materno" id="mat">
					</div>
				</div>
				<div class="row">
					<div class="center-align">
						<input type="submit" value="Agregar Evento" class="btn red darken-4">
					</div>
					
				</div>
				
			</form>
		</div>
	</div>

<?php 
	if(isset($_POST['nombre'])){
		$name=trim($_POST['nombre']);
		$paterno=trim($_POST['paterno']);
		$materno=trim($_POST['materno']);
		$uid=$_SESSION['u_id'];

	include ("conexion.inc.php");
    $link=Conectarse();

    $insertar="INSERT INTO contactos VALUES(null,'$name','$paterno','$materno','$uid')";
    mysql_query($insertar)or die(mysql_error());
	echo '<SCRIPT LANGUAJE="javascript">location.href="misContacos.php.php";</SCRIPT>';
}
?>
						

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>

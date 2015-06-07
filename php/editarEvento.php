<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Editar Evento</title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
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
			<h4 class="center-align">Agregar un Nuevo Evento</h4>
			<?php 
				$id=$_GET['id'];
				include ("conexion.inc.php");
			    $link=Conectarse();
			    $consulta="SELECT * FROM eventos WHERE id = '$id'";
			    $ssql=mysql_query($consulta,$link);	
			    $row = mysql_fetch_row($ssql);
			 ?>
		</div>
	</div>      
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>
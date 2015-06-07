<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Mis Eventos</title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="grey lighten-2">
    <?php 
    session_start();
    if(isset($_SESSION['u_user'])){

    }
    else{
      header("Location: ../index.php");
    }
  ?>
<?php include 'nav.php'; ?>
<div class="container">

	<div class="card">
   <?php
      	$id=$_GET['id'];
        include("conexion.inc.php");
        $link=Conectarse();
        $result=mysql_query("SELECT * FROM eventos WHERE id_evento='$id' ",$link);

        $row = mysql_fetch_row($result);
        if($row[9]==null){
          $mapa='<img src="../img/mapa.jpg" alt="" class="responsive-img">';
        }
        else{
          $mapa=$row[9];
        }
        	echo '<h4 class="center-align">'.$row[1].'</h4>';
         echo '<div class="row">
  <div class="col m6 s12">
    <div class="row">
      <div class="col m10 s12">
        <p class="titulo">Lugar:    '.$row[2].'</p>
        
      </div>
    </div>
    <div class="row">
      <div class="col m10 s12">
        '.$mapa.'
      </div>
    </div>
  </div>
  <div class="col m6 s12">
    <div class="row">
      <div class="col m6 s12">
        <p class="titulo">Categoria:'.$row[6].'</p>
      </div>
      <div class="col m6 s12">
        <p class="titulo">Tipo: </p>
      </div>
    <div class="row">
      <div class="col m6 s12"><p class="titulo">Inicio: '.$row[4].'</p></div>
      <div class="col m6 s12"><p class="titulo">Fin:'.$row[5].'</p></div>
    <div class="row">
      <div class="col m12 s12">
        <p class="titulo">Descripcion: '.$row[3].'</p>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>';
		?>
	</div>
</div>

    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Crear Evento</title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	<div class="container">
		<div class="card">
			<h4 class="center-align">Agregar un Nuevo Evento</h4>
			<form action="crearEvento.php" method="post">
				<div class="row">
					<div class="input-field col s6 m6">
						<label for="title">Titulo</label>
						<input type="text" name="titulo" id="title">
						
					</div>
					<div class="input-field col s6 m6">
						
						<label for="place">Lugar</label>
						<input type="text" name="lugar" id="place">
					</div>
				</div>
				
				<div class="row">
						<div class="input-field col s6 m6">
							<label for="fecha">Inicio</label>
							<input id="fecha" type="date" name="inicio" class="datepicker" required>
						</div>
						<div class="input-field col s6 m6">
							<label for="fechafin">Fin</label>
							<input id="fechafin" type="date" name="fin" class="datepicker" required>
						</div>
				</div>
				<div class="row">
					<div class="input-field col m6">
							<label for="description">Descripcion</label>
						<textarea name="description" id="description" class="materialize-textarea"></textarea>
					
					</div>
					<div class="col m3">
						<label>Categoria</label>
				    <select name="categoria" class="browser-default">
				      
				      <option value="1">Familia</option>
				      <option value="2">Amigos</option>
				      <option value="3">Trabajo</option>
				    </select>
				    
				</div>
				<div class="col m3">
					<div class="row" style="margin-left:2em;;">
						<p style="font-size:1.2em;">Visibilidad</p>
						<p>
					      <input name="visibilidad" type="radio" id="test1" value="0" />
					      <label for="test1">Publico</label>
					    </p>
					    <p>
					      <input name="visibilidad" type="radio" id="test2"  value="1"/>
					      <label for="test2">Privado</label>
					    </p>
					</div>
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
	if(isset($_POST['titulo'])){
		$titulo=trim($_POST['titulo']);
		$lugar=trim($_POST['lugar']);
		$descr=trim($_POST['description']);
		$inio=trim($_POST['inicio']);
		$fin=trim($_POST['fin']);
		$categoria=trim($_POST['categoria']);
		$visi=trim($_POST['visibilidad']);
		$user="1";

	include ("conexion.inc.php");
    $link=Conectarse();

    $insertar="INSERT INTO `agendazsckare`.`eventos` (
`id_evento` ,
`title` ,
`place` ,
`description` ,
`inicio` ,
`fin` ,
`categoria` ,
`visibilidad` ,
`id_user`
)
VALUES (
NULL , '$titulo', '$lugar', '$descr', '$inio', '$fin', '$categoria', '$visi', '$user'
);";
    mysql_query($insertar)or die(mysql_error());
          echo '<script type="text/javascript">alert("REGISTRADO ");</script>';
  ?>
            <SCRIPT LANGUAJE="javascript">
              location.href="../home.php";
            </SCRIPT>
          <?php
  }
 ?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>

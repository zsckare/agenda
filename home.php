<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="grey lighten-2">
	  <?php include 'navegacion.php'; ?>
<div class="container">
	<div class=" ">
   <h4 class="center-align">Eventos</h4> 
     <div class="container">
       <?php 
        include("php/conexion.inc.php");
        $link=Conectarse();
        $result=mysql_query("SELECT * FROM eventos ",$link);
              echo '<div class="row">';
              while ($row = mysql_fetch_row($result)){ 

              echo '<div class="card col m4 evento">'.
                '<h5 class="center-align">'.  "$row[1]".'</h5>'.
                '<p>Lugar:  '."$row[2]".'</p>'.'<p>Detalles:  '."$row[3]".'</p>'
                .'<p>Inicio:  '."$row[4]".'</p>'
                .'<p>Fin: '."$row[5]".'</p>'
              .'</div>';
              } 
              echo "</div>"
        ?>
    </div>
  </div>

</div>

    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>
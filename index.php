<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Agenda 2015</title>

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
    <div class="">
      <h3 class="center-align">Eventos Publicos</h3>
      <?php 
        include("php/conexion.inc.php");
        $link=Conectarse();
        $result=mysql_query("SELECT * FROM eventos WHERE visibilidad='0' ",$link);
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
  <?php include 'loginmodal.php'; ?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
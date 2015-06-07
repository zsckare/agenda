<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Home</title>

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
      header("Location: index.php");
    }
  ?>
	  <?php include '../navegacion.php'; ?>
<div class="contenedor">
	<div class=" ">
   <h4 class="card center-align">Eventos</h4> 
   
       <?php 
        include("conexion.inc.php");
        $link=Conectarse();
        $result=mysql_query("SELECT * FROM eventos WHERE visibilidad='0'",$link);
              echo '<div class="rigth-space row">';
              while ($row = mysql_fetch_row($result)){ 
                
                if($row[7]==1){
                  echo '<div class="card col m3 evento blue lighten-4">';
                }else{
                  echo '<div class="card col m3 evento ">';
                }
              
              echo
                '<h5 class="center-align">'.  "$row[1]".'</h5>'.
                '<p>Lugar:  '."$row[2]".'</p>'
                .'<p>Inicio:  '."$row[4]".'</p>'
                .'<p>Fin: '."$row[5]".'</p>'.
                '<p><a class="be-black" href="verEvento.php?id='.$row[0].'">+   Ver mas detalles </a></p>'
              .'</div>';
              } 
              echo "</div>"
        ?>
    
  </div>

</div>

    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>
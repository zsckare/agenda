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
	<div class=" ">
    
    <div>
       <h4 class="center-align card">Mis Contactos</h4> 
   <div id="aniadir">
       <a class="btn-floating btn-large waves-effect waves-light yellow darken-4" href="crearContacto.php"><i class="mdi-content-add"></i></a>
    </div> 
    </div>


  </div>

</div>

    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>
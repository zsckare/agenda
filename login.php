<?php 
	session_start();

	$user=$_POST['user'];
	$pwd=$_POST['pass'];

	include 'php/conexion.inc.php';
	$link=Conectarse();
    $con=mysql_query("SELECT * FROM usuarios WHERE nick='$user' AND password='$pwd' ",$link);

	if($resultado = mysql_fetch_array($con)){
		$_SESSION['u_user']=$user;
		$_SESSION['u_id']=$resultado[0];
		header("Location: php/home.php");
		echo "sesion iniciada";

	}else{
		header("Location: index.php");
	}


 ?>

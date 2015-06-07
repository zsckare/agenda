<?php
       $id=$_GET['id'];
        include("conexion.inc.php");
        $link=Conectarse();
        $result=mysql_query("DELETE FROM eventos WHERE id_evento='$id' ",$link);

        header("Location: home.php");
?>
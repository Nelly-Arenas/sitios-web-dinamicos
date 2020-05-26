<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="contactanos";
$conex = mysqli_connect($servidor,$usuario,$clave,$basededatos); 

 		$id=$_REQUEST['id'];
        
        $consulta = "DELETE FROM `persona`  WHERE id='$id'";
        $resultado = $conex->query($consulta);
        if ($resultado) {
            header("Location:tabla.php");
        } else {
            echo "intersercion no exitosa";
        }
   


?>
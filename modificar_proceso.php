<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="contactanos";
$conex = mysqli_connect($servidor,$usuario,$clave,$basededatos); 

 		$id=$_REQUEST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $ubicacion = $_POST['ubicacion'];
        $hora = $_POST['hora_inicio'];
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $año = $_POST['año'];
        $evento = $_POST['evento'];
        
  
        $consulta = "UPDATE persona SET nombre='$nombre',email='$email',ubicacion='$ubicacion',hora_inicio='$hora',dia='$dia',mes='$mes',año='$año',evento='$evento' WHERE id='$id'";
        $resultado = $conex->query($consulta); 
        if ($resultado) {
            header("Location:tabla.php");
        } else {
            echo "intersercion no exitosa";
        }
   


?>
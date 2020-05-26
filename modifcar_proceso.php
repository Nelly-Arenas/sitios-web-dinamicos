<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="contactanos";
$conex = mysqli_connect($servidor,$usuario,$clave,$basededatos); 

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['ubicacion']) >= 1 && strlen($_POST['hora_inicio']) >= 1 && strlen($_POST['dia']) >= 1 && strlen($_POST['mes']) >= 1 && strlen($_POST['año']) >= 1 && strlen($_POST['evento']) >= 1) {
    	$id=$_REQUEST['ID']
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $ubicacion = trim($_POST['ubicacion']);
        $hora = trim($_POST['hora_inicio']);
        $dia = trim($_POST['dia']);
        $mes = trim($_POST['mes']);
        $año = trim($_POST['año']);
        $evento = trim($_POST['evento']);
        

        $consulta = "UPDATE `persona` SET `nombre`=['$nombre'],`email`=['$email'],`ubicacion`=['$ubicacion'],`hora_inicio`=['$hora'],`dia`=['$dia'],`mes`=['$mes'],`año`=['$año'],`evento`=['$evento'] WHERE id='$id'";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            header("Location:tabla.php");
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
        }
    }   else {
            ?> 
            <h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


?>
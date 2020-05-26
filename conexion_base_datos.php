<?php 

$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="contactanos";
$conex = mysqli_connect($servidor,$usuario,$clave,$basededatos); 

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['ubicacion']) >= 1 && strlen($_POST['hora_inicio']) >= 1 && strlen($_POST['dia']) >= 1 && strlen($_POST['mes']) >= 1 && strlen($_POST['año']) >= 1 && strlen($_POST['evento']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $ubicacion = trim($_POST['ubicacion']);
        $hora = trim($_POST['hora_inicio']);
        $dia = trim($_POST['dia']);
        $mes = trim($_POST['mes']);
        $año = trim($_POST['año']);
        $evento = trim($_POST['evento']);
        

        $consulta = "INSERT INTO persona(nombre, email, ubicacion, hora_inicio, dia, mes, año, evento) VALUES ('$nombre','$email','$ubicacion','$hora','$dia','$mes','$año','$evento')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
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
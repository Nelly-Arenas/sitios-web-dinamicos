
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viemport" content="width=device-width, inicial-scale=1.0">
	<title>CONTACTANOS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<script type="js/jquery-3.5.0"></script>
	<script type="js/script.js"></script>
</head>
<body>
<section class="form_wrap">
	
	<section class="fondo">
		<section class="info_title">
			<center> <h2>INFORMACION<br>DEL CONTACTO</h2> </center>
		</section>
		<section class="info_items">
			<center> 
			<p>arenasnelly4@gmail.com</p>
			<p>24615537</p> 
		    </center>
		</section>
	</section>

	<form action="" class="inicio" method="post">

		<h1>ENVIA UN MENSAJE</h1>
            <div class="user_info">
                <label for="nombre">Nombres *</label>
                <input type="text" name="nombre">
                <br>		
                <label for="correo">Correo electronico *</label>
                <input type="email"  name="email">
                <br>
                <label for="lugar">Ubicacion del evento</label>
                <input type="text"  name="ubicacion">
                <br>
                <label for="hora">Hora de inicio *</label>
                <input type="text"  name="hora_inicio">
                <br>		
                <label for="dia">Dia *</label>
                <input type="text"  name="dia">
                <br>
                <label for="mes">Mes</label>
                <input type="text"  name="mes">
                <br>
                <label for="año">Año</label>
                <input type="text" name="año">
                <br>
                <label for="evento">tipo de evento</label>
                <input type="text" name="evento">
                <br>

                <input type="submit" name="register">
            </div>
	</form>
<?php

include("conexion_base_datos.php");

?>

</section>
</body>
</html>
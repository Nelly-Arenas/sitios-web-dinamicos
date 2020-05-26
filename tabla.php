<!DOCTYPE html>
<html>
<head>
	<title>tabla</title>
</head>
<body>
<center>
	<table>
		
			<tr>
				<th > <a href="contactanos.php">Nuevo</a></th>
				<th > Lista de usuarios </th>
			</tr>	 
		</table><br/>
		<table>
		
			<tr>
				<td>Nombre | </td>
				<td>Correo | </td>
				<td>Ubicacion | </td>
				<td>hora | </td>
				<td>dia | </td>
				<td>mes | </td>
				<td>año | </td>
				<td>tipo de evento | </td>
				<td>modificar | </td>
				<td>eliminar | </td>
			</tr>
			<?php 
				include("conexion_base_datos.php");
				$query="SELECT * FROM persona";
				$resultado=$conex->query($query);
				while ($row=$resultado->fetch_assoc()) {
					?>
					<tr>
						<td>
							<?php echo $row['id']; ?>
							<?php echo $row['nombre']; ?>
							<?php echo $row['email']; ?>
							<?php echo $row['ubicacion']; ?>
							<?php echo $row['hora_inicio']; ?>
							<?php echo $row['dia']; ?>
							<?php echo $row['mes']; ?>
							<?php echo $row['año']; ?>
							<?php echo $row['evento']; ?>
							<td><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></td>
							<td><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
						</td>
					</tr>

					<?php
				}
			?>
		
	</table>
</center>
</body>
</html>
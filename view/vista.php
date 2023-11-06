<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>bienvenido JMAS</h1>
	<table border="1">
		<tr>
			<td><strong>id</strong></td>
			<td><strong>tramite</strong></td>
			<td><strong>oficina</strong></td>
			<td><strong>numero_de_cuenta</strong></td>
			<td><strong>nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>telefono</strong></td>
			<td><strong>correo</strong></td>
			<td><strong>direccion</strong></td>
		
			
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["id"]; ?></td>
						<td><?php echo $pd[$i]["tramite"]; ?></td>
						<td><?php echo $pd[$i]["oficina"]; ?></td>
						<td><?php echo $pd[$i]["numero_de_cuenta"]; ?></td>
						<td><?php echo $pd[$i]["nombre"]; ?></td>
						<td><?php echo $pd[$i]["Apellido"]; ?></td>
						<td><?php echo $pd[$i]["telefono"]; ?></td>
						<td><?php echo $pd[$i]["correo"]; ?></td>
						<td><?php echo $pd[$i]["direccion"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>
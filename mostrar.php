<!DOCTYPE html>
<html>
<head>
	<title>Tabla de registros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js /bootstrap.min.js"></script>
	
</head>
<body background="img/fondo1.jpg">
<center>
	<nav class="md-4 navbar-info bg-info">
	 	<a class="navbar-brand" href="#"></a>
	 	<button class="navbar-toggler" type="button" data-toggel="collapse" data-target="#collapsibleNavbar">
	 	<span class="navbar-toggler-icon"></span>
	 	</button>
	 	<center>
		<h1>Registros</h1></center></nav>
	<table border="3" bgcolor=FFCECB align=center>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Imagen</th>
				<!--<th colspan="2">Operaciones</th>-->
			</tr>
		</thead>
		<tbody>
			<?php
			    include("conexion.php");
			    $query = "SELECT * FROM pilotos";
			    $resultado= $conexion->query($query);
			    while($row = $resultado->fetch_assoc()){
			?>
			  <tr>
			  	<td><?php echo $row['id_piloto']; ?></td>
			  	<td><?php echo $row['nombre_piloto']; ?></td>
			  	<td><?php echo $row['apellido_piloto']; ?></td>
			  	<td><img height="250px" src="data:image/jpg;base64, <?php echo base64_encode($row['url_foto_piloto']);?>"/></td>

			  	<!--<th><a href="modificar.php?id_piloto=<?php echo $row['id_piloto'];?>">Modificar</a></th>
			  	<th><a href="#">Eliminar</a></th> -->
			  </tr>
			 <?php 
			   }
			  ?>
		</tbody>
	</table><br><br>
		<a class="btn btn-primary" href="index.php" role="button">Nuevo</a>
	<br><br><br>
</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
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
		<h1>Registra un piloto</h1></center></nav>
        <form action="guardar.php" method="POST" enctype="multipart/form-data">
        	<br><br>
        	<input type="text" required name="nombre_piloto" placeholder="Escribe un nombre"><br><br>
        	<input type="text" required name="apellido_piloto" placeholder="Escribe los apellidos"><br><br>
        	<input class=" btn-secondary" type="file" name="url_foto_piloto"><br><br>
        	<br><br><br><br>
        	<input  class=" btn-primary" type="submit" name="Aceptar">


        </form>
	</center>
</body>
</html>
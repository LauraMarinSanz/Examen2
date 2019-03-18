<?php
  include("conexion.php");
  $nombre_piloto = $_POST['nombre_piloto'];
  $apellido_piloto = $_POST['apellido_piloto'];
  $url_foto_piloto = addslashes(file_get_contents($_FILES['url_foto_piloto']['tmp_name']));
 
  $query = "INSERT INTO pilotos(nombre_piloto, apellido_piloto, url_foto_piloto) VALUES ('$nombre_piloto', '$apellido_piloto', '$url_foto_piloto')";

     $resultado = $conexion->query($query);

    if($resultado){
        header("Location: mostrar.php");
    }else{
        echo"No se inserto el registro";
    }
  ?>
 
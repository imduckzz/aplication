<?php
    include 'connection.php';

    $id = $_POST["identificator"];
    $nombre = $_POST["name"];
    $detalle = $_POST["detail"];

    
    $sql="INSERT INTO category (ide, name, detail)
          values('$id', '$nombre', '$detalle')";


    $res = 0;
    if($conexion->query($sql) === TRUE) {
      echo('Accepted');
    }
    else{
      echo('Refused');
    }
    mysqli_close($conexion);  // Cierra la conexion


?>
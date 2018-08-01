<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$query = "DELETE FROM tabla_imagen WHERE id = '$id'";
// mysqli_query($conexion, $query);
$resultado = $conexion->query($query);

if ($resultado) {
  header('Location: mostrar.php');
}else {
  echo "No se elimino";
}

 ?>

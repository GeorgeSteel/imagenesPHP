<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$id = $_REQUEST['id'];

$query = "UPDATE tabla_imagen SET nombre = '$nombre', imagen = '$imagen' WHERE id = '$id'";
// mysqli_query($conexion, $query);
$resultado = $conexion->query($query);

if ($resultado) {
  header('Location: mostrar.php');
}else {
  echo "No se modifico";
}

 ?>

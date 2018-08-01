<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index de imagenes</title>
  </head>
  <body>
    <?php
      include 'conexion.php';
      $id = $_REQUEST['id'];
      $query = "SELECT * FROM tabla_imagen WHERE id = '$id'";
      $resultado = $conexion->query($query);
      $row = $resultado->fetch_assoc();
    ?>
    <form action="proceso_modificar.php?id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
      <input type="text" name="nombre"  placeholder="Nombre" value="<?php echo $row['nombre'] ?>" required>
      <br><br>
      <img height="200" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>">
      <br><br>
      <input type="file" name="imagen" value="" required>
      <br><br>
      <input type="submit" name="" value="Aceptar">
    </form>
  </body>
</html>

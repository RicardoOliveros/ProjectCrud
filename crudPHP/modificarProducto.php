<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conn->query("SELECT * FROM producto WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modificar formulario</title>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
    <h3 class="text-center text-secondary">Modificar Registro</h3>
   <input type="hidden" name="id" value="<?= $_GET ["id"]?>"> 
    <?php
    include "controlador/modificarProducto.php";
    while ($datos = $sql->fetch_object()) {
    ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $datos->Nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
            <input type="text" class="form-control" name="apellido" value="<?php echo $datos->Apellido; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero de documento</label>
            <input type="text" class="form-control" name="numero" value="<?php echo $datos->Numero; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo $datos->Fecha; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" value="<?php echo $datos->Correo; ?>">
        </div>
    <?php
    }
    ?>

    <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Modificar registro</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Crud en php y Mysql</title>
</head>
<body>

    <h1 class="text-center">Crud Project</h1>
    <?php
    include "controlador/eliminarRegistro.php";
    include "modelo/conexion.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registroPersona.php";


            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de documento</label>
                <input type="text" class="form-control" name="numero">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha" >
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" >
                
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Submit</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-primary">
                    <tr >
                        <th scope="col">ID persona</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Numero de documento</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                      // Ensure this file correctly connects to your database

                    // Verify the connection
                    
                    // SQL statement to select data from the 'producto' table
                    $sql = $conn->query("SELECT * FROM producto");

                    if ($sql === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    while ($datos = $sql->fetch_object()) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($datos->id); ?></th>
                            <td><?php echo htmlspecialchars($datos->Nombre); ?></td>
                            <td><?php echo htmlspecialchars($datos->Apellido); ?></td>
                            <td><?php echo htmlspecialchars($datos->Numero); ?></td>
                            <td><?php echo htmlspecialchars($datos->Fecha); ?></td>
                            <td><?php echo htmlspecialchars($datos->Correo); ?></td>
                            <td>
                                <a href="modificarProducto.php?id=<?= $datos->id?>" class="btn btn-small btn-warning"><box-icon type='solid' name='edit-alt'></box-icon></a>
                                <a href="index.php?id=<?= $datos->id?>" class="btn btn-small btn-danger"><box-icon name='trash'></box-icon></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
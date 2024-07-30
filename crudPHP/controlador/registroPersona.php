<?php

if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["numero"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numero"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conn->query("INSERT INTO producto (nombre, apellido, numero, fecha, correo) VALUES ('$nombre', '$apellido', '$numero', '$fecha', '$correo')");
        
        if ($sql) {
            echo '<div class="alert alert-success">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger">Error en la consulta</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Por favor! Complete, todos los campos</div>';
    }
}

?>

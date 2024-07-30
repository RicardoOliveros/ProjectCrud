<?php
if(!empty($_POST["btnRegistrar"])){
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["numero"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numero"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        $sql=$conn->query("UPDATE producto set nombre='$nombre', apellido='$apellido', numero='$numero', fecha='$fecha', correo='$correo' WHERE id=$id" );
        if ($sql==1){
            header("location:index.php");
        } else{
            echo "<div class='alert alert-danger'>Error al modificar registro</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>Campos vacio</div>";
    }
    
}
?>
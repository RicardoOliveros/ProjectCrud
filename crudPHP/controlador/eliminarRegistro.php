<?php 

include "modelo/conexion.php";
    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql = $conn->query("DELETE FROM producto WHERE id = $id");
        if($sql==+TRUE){
            echo '<div class="alert alert-success" style="font-size: 0.875rem; width: 40%;">Registro eliminado</div>';
            $sqlCheckEmpty = "SELECT COUNT(*) as count FROM producto";
            $result = $conn->query($sqlCheckEmpty);
            $row = $result->fetch_assoc();
            if ($row['count'] == 0) {
                // Reinicia el auto-incremento
                $conn->query("ALTER TABLE producto AUTO_INCREMENT = 1");
            }
        } else{
            echo "<div class='alert alert-warnings'>Error al eliminar";
        }
    }
?>
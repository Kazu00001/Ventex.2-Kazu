<?php
    require_once('../Conexion_db/conexion_usser_delete.php');

    $eliminar=$_POST['Id_Pedido'];
    // Suponiendo que este es un valor válido para eliminar un registro de la base de datos
    $sql = "DELETE FROM pedidos WHERE ID_pedido = $eliminar";
    $delete = mysqli_query($Conexion_usser_delete, $sql);

    if ($delete) {
        header('Location: ../../Frames/pantalla-pedidos.php');
        exit(); // Agregamos exit() para asegurarnos de que el script se detenga después de la redirección
    } else {
        echo 'Hubo un error al eliminar el registro.';
    }
?>
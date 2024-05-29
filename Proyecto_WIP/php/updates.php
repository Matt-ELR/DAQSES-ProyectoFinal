<?php
include 'conexion.php';

$nReferencia = $_POST['nReferencia'];
$new_Nombre = $_POST['new_Nombre'];
$update = $con -> query("UPDATE contacto SET Nombre='$new_Nombre' WHERE nReferencia='$nReferencia'");
if ($update) {
    echo "<script>
    location.href='../reseñas.php';
    alert('Su comentario fue actualizado');
    </script>";
} else {
    echo "<script>
    location.href='../reseñas.php?nReferencia=".$nReferencia."';
    </script>";
}
?>



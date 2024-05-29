<?php
include 'conexion.php';
$nReferencia = $_REQUEST['nReferencia'];
$del = $con -> query("DELETE FROM contacto WHERE nReferencia = '$nReferencia'");
if ($del) {
    echo "<script>
    location.href='../reseñas.php';
    </script>";
} else {
    echo "<script>
    alert('El registro no pudo ser eliminado');
    location.href='../reseñas.php';
    </script>";
}
?>
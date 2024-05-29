<?php
include 'conexion.php';
$Nombre=$_POST['Nombre'];
$Email=$_POST['Email'];
$Comentario=$_POST['Comentario'];
$insert=$con -> query("INSERT INTO `contacto`(`Nombre`,`Email`,`Comentario`)
VALUES ('$Nombre','$Email','$Comentario')");
if($insert){
    echo "<script>
    alert('Comentario agregado');
    location.href='../reseñas.php';
    </script>";
}else{
    echo "<script>
    alert('No se guardo ningun registro');
    location.href='../reseñas.php';
    </script>";
}
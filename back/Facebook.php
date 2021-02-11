<?php 
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];


$insertar = "INSERT INTO masterclass VALUES ('$nombre','$apellido','$correo', $telefono )";

$query = mysqli_query($conectar, $insertar);

if($query){
    echo "<script> location.href = '../Recurso_MasterClass_29_enero02swfdggwefasda=oijdde.html';
    </script>";
    
}else{
    echo "<script> alert('incorrecto);    </script>";
}

?>
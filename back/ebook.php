<?php 
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];


$insertar = "INSERT INTO ebook VALUES ('$nombre','$apellido','$correo', $telefono)";

$query = mysqli_query($conectar, $insertar);

    if($query){
        echo "<script> location.href = '../registro_exitoso.html';
        </script>";
        
    }else{
        echo "<script> alert('incorrecto);    </script>";
    }

?>

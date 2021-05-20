<?php

include('DB/abrir_conexion.php');

$correo = $_POST['Correo'];
$contraseña = $_POST['Contraseña'];

$consulta = mysqli_query($conexion,"SELECT * FROM $tabla_db1 where UserCorreo = '".$correo."' and UserContraseña ='".$contraseña."'");

$fila = mysqli_num_rows($consulta);

if ($fila == 1) {
    
    header("location: inicioReg.php") ;
    
}else if ($fila == 0) {

    header("location: iniciar-sesion-error.php") ;
}

?>
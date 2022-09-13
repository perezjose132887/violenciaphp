<?php

include 'ConectarBD.php';
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];


/*$correo="maribel@gmail.com";
$contrasena="1234";*/


$sentencia=$mysql->prepare("SELECT * FROM usuario WHERE correo=? AND contrasenha=?");
$sentencia->bind_param('ss',$correo,$contrasena);
$sentencia->execute();

$resultado=$sentencia->get_result();
if($fila=$resultado->fetch_assoc()){
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}

$sentencia->close();
$mysql->close();

?>
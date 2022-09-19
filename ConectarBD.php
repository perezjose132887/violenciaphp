<?php
$conexion = new mysqli(
    "localhost",
    "root",
    "perez",
    "bdviolencia"
);
if($conexion->connect_error){
    die("la coneccion fallo".$conexion->connect_error);
}

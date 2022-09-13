<?php
$mysql = new mysqli(
    "localhost",
    "root",
    "perez",
    "bdviolencia"
);
if($mysql->connect_error){
    die("la coneccion fallo".$mysql->connect_error);
}

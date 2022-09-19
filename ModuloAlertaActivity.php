<?php
//$conexion =mysqli_connect('localhost','root','perez','bdviolencia');
include 'ConectarBD.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $idUsuario=$_POST['idUsuario'];
    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];

    $consulta="INSERT INTO alerta (idAlerta,idUsuario,latitud,longitud) VALUES(NULL,'$idUsuario','$latitud','$longitud')";

    if(mysqli_query($conexion,$consulta)){
        echo "Se subio exitosamente";
    }else{
        echo "error";
    }

}


?>
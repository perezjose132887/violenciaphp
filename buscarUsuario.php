<?php


$conexion =mysqli_connect('localhost','root','perez','bdviolencia');

$numeroCI=$_GET['numeroCI'];
//$ci="12345610";

$consulta="SELECT * FROM usuario WHERE numeroCI='$numeroCI'";
$resultado=$conexion -> query($consulta);

while($fila=$resultado -> fetch_array()){
    $usu[]=array_map('utf8_encode',$fila);
}

echo json_encode($usu);
$resultado -> close();
?>

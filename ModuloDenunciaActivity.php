<?php


$conexion =mysqli_connect('localhost','root','perez','bdviolencia');

if($_SERVER['REQUEST_METHOD']=='POST'){


$idUsuario=$_POST['idUsuario'];
$idCategoria=$_POST['idCategoria'];
$declaracion=$_POST['declaracion'];
$foto=$_POST['foto'];


$path="denuncia/$idCategoria.png";
$actualpath="http://localhost/violencia/$path";
/*$idDepartamento=2;
$nombres='Juana';
$primerApellido='Huanca';
$segundoApellido='Tola';
$telefono='63995652';
$ci='2345654';
$sexo='F';
$nombreUsuario='juana';
$contrasena='1234';
$correo='juana@gmail.com';
$rol='usuario';*/

$consulta="INSERT INTO denuncia (idUsuario,idCategoria,declaracion,foto) VALUES('$idUsuario','$idCategoria','$declaracion','$actualpath')";
/*$resultado =mysqli_query($conexion,$consulta);
mysqli_close($conexion);*/


if(mysqli_query($conexion,$consulta)){
    file_put_contents($path, base64_decode($foto));

    echo "Se subio exitosamente";
    mysqli_close($conexion);
}else{
    echo "error";
}


/*if($resultado){
    echo "registro correctamente";
}else{
    echo "error" ;
} */



}



?>


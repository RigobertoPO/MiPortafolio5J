<?php
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['paterno'];
$apellidoMaterno=$_POST['materno'];
$correo=$_POST['correo'];
$password=$_POST['password'];

require_once '../Models/Usuario.php';
$nuevoUsuario=new Usuario();
$resultado=$nuevoUsuario->CreateUsuario($nombre,$apellidoPaterno,$apellidoMaterno,$correo,$password);
if($resultado){
    header("Location:login.php");
}
else{
    //echo $resultado; 
    header("Location: registro.php");
}
?>
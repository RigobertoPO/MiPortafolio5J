<?php
$correo=$_POST['correo'];
$password=$_POST['password'];
//echo $correo;
require_once '../Models/Usuario.php';
$usuario=new Usuario();
$resultado=$usuario->AutentificarUsuario($correo,$password);
if(count($resultado)>0){
    //echo 'existe';
    foreach ($resultado as $registroEcontrado) {
        session_start();
        $_SESSION['idUsuario']=$registroEcontrado['Id'];
        $_SESSION['nombreUsuario']=$registroEcontrado['Correo'];
        $_SESSION['tipoUsuario']=$registroEcontrado['Tipo'];
        header("Location:../index.php");
    }
}
else{
    header("Location:login.php");
}
?>
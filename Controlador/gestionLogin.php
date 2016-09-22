<?php

include '../Modelo/clsLogin.php';
include '../DAO/loginDAO.php';

isset ($_REQUEST['type']) ? $accion = $_REQUEST['type']: $accion="";
isset ($_REQUEST['usuario']) ? $usuario = $_REQUEST['usuario']: $usuario="";
isset ($_REQUEST['password']) ? $password = $_REQUEST['password']: $password="";

session_start();

$login= new clsLogin($usuario, $password);
$dao= new LoginDAO();

$mensaje= "";

switch ($accion){
    case "con":
        if($dao->ingresar($login)){
         $_SESSION['name_user']=$dao->ingresar($login); 
         $mensaje="1";
        
        } else{
            $mensaje="-1";
        }
        break;
        
    case "desc":
        session_destroy();
        $mensaje="1";
        break;
}
echo $mensaje;  
//header('location:../index.php?message_Login='.$mensaje);
?>

<?php

require '../Modelo/clsEstudiante.php';
require '../DAO/estudianteDAO.php';

isset($_REQUEST['id'])? $id= $_REQUEST['id']:$id="";
isset($_REQUEST['codigo'])? $codigo= $_REQUEST['codigo']:$codigo="";
isset($_REQUEST['nombre'])? $nombre= $_REQUEST['nombre']:$nombre="";
isset($_REQUEST['apellido'])? $apellido= $_REQUEST['apellido']:$apellido="";
isset($_REQUEST['cedula'])? $cedula= $_REQUEST['cedula']:$cedula="";
isset($_REQUEST['edad'])? $edad= $_REQUEST['edad']:$edad="";
isset($_REQUEST['usuario'])? $usuario= $_REQUEST['usuario']:$usuario="";
isset($_REQUEST['password'])? $password= $_REQUEST['password'] : $password="";
isset($_REQUEST['type'])? $accion= $_REQUEST['type'] : $accion="";


//echo $id.'-'.$codigo.'-'.$nombre.'-'.$apellido.'-'.$cedula.'-'.$edad.'-'.$semestre.'-'.$accion;

$estudiante= new clsEstudiante($id, $codigo, $nombre, $apellido, $cedula, $edad, $usuario, $password);
$dao= new estudianteDAO();

switch($accion){
    case "save":    
        $dao->guardar($estudiante);
        break;
    
     case "list":
        $dao->listar($estudiante);
        break;
    
    case "search":
        $dao->buscar($estudiante);
        break;
    
    case "update":
        $dao->modificar($estudiante);
        
        break;
    
     case "delete":
        $dao->eliminar($estudiante);
        break;   
}
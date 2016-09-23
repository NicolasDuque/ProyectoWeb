<?php

class clsEstudiante {
    private $id;
    private $codigo;
    private $nombre;
    private $apellido;
    private $cedula;
    private $edad;
    private $usuario;
    private $password;
    
    function __construct($id, $codigo, $nombre, $apellido, $cedula, $edad, $usuario, $password) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->edad = $edad;
        $this->usuario = $usuario;
        $this->password = $password;
    }
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getEdad() {
        return $this->edad;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }


     


}
?>
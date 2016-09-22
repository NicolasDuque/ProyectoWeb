<?php

class clsEstudiante {
    private $id;
    private $codigo;
    private $nombre;
    private $apellido;
    private $cedula;
    private $edad;
    
    function clsEstudiante($id,$codigo,$nombre,$apellido,$cedula,$edad){
        $this->id=$id;
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->cedula=$cedula;
        $this->edad=$edad;
        
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


}
?>
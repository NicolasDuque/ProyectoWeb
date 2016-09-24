<?php

class clsConexion {   
    private $usuario;
    private $password;
    private $dataBase;
    private $puerto;
    private $host;
    private $cadenaConexion;
    private $connect;
    private $consulta_ID;
    
    public function conectar(){
        $this->usuario="postgres"; 
        $this->password="jacko1234";//el password con el que se instalo el wamp server
        $this->dataBase="ingenieria3";
        $this->puerto=5432;
        $this->host="localhost";
        
        $this->cadenaConexion = "host=$this->host port =$this->puerto dbname= $this->dataBase user =$this->usuario password = $this->password";  
    
        $this->connect = pg_connect($this->cadenaConexion) or die  ("error al realizar la conexion con la base de datos");
    }
    
    public function  acceder_conexion(){
        return $this->connect;
        
    }
    function ejecutar($sql){
        if($sql==""){
            return 0;
        }else{
            $this->consulta_ID = pg_query($this->connect,$sql);
            return $this->consulta_ID;
        }
        
    }
    function validarLogin($resultado){
        $vec = pg_fetch_row($resultado);
        
        if($vec[0]!=""){
           return $vec[0]; 
        }
            else{
             return "";   
            }
    
    }
    function respuesta($resultado){
        if($resultado){
           $mensaje = "operacion exitosa"; 
        }
        else{
            $mensaje="Error en la operacion";
        }
        header('location: ../index.php?page=estudiantes&&message='.$mensaje);
    }
    
    function convertirJSON($resultado) {
        while ($reg = pg_fetch_array($resultado, null, PGSQL_ASSOC)) {
            $vec[] = $reg;
        }
        if (isset($vec)) {
            echo(json_encode($vec));
        } else {
            echo '[{"res" : "0"}]';
        }
    }  
    
    
     function convertirJSONSinRetorno($resultado) {
        
        if ($resultado) {
             echo '[{"res" : "1"}]';
        } else {
            echo '[{"res" : "0"}]';
        }
    }  
}

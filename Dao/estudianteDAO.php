<?php

class estudianteDAO {
    
    private $con;
    private $objCon;
    
    function estudianteDAO(){
        require '../Modelo/clsConexion.php';
        $this->objCon= new clsConexion();
        $this->con = $this->objCon->conectar();    
    }
    public function  guardar(clsEstudiante $obj){
        
        $sql= "insert    into estudiantes(codigo,nombre,apellido,cedula,edad) values('".
            $obj->getCodigo() ."','".$obj->getNombre()."','".$obj->getApellido()."','".$obj->getCedula()."',".
            $obj->getEdad().");";
        
        $resultado = $this->objCon->ejecutar($sql);
        $this->objCon->convertirJSONSinRetorno($resultado);
    }
    
    public function listar(clsEstudiante $obj){
        $slq="select codigo,nombre,apellido,cedula,edad from estudiantes";
        $resultado = $this->objCon->ejecutar($slq);
        $this->objCon->convertirJSON($resultado);
        
    }
    
    public function construirListado ($resultado) {
        
        if($resultado && pg_num_rows($resultado)>0){
            $cadenaHTML = "<table border='1'>";
             $cadenaHTML .="<tr>";
              $cadenaHTML .="<th>Codigo</th>";
              $cadenaHTML .="<th>Nombre</th>";
              $cadenaHTML .="<th>Apellido</th>";
              $cadenaHTML .="<th>Cedula</th>";
              $cadenaHTML .="<th>Edad</th>";
              $cadenaHTML .="</tr>";
              
              for($cont =0 ;$cont < pg_num_rows($resultado); $cont++){
                  $cadenaHTML .="<tr>";
                  $cadenaHTML .="<td>".  pg_result($resultado,$cont,0)."</td>";
                  $cadenaHTML .="<td>".  pg_result($resultado,$cont,1)."</td>";
                  $cadenaHTML .="<td>".  pg_result($resultado,$cont,2)."</td>";
                  $cadenaHTML .="<td>".  pg_result($resultado,$cont,3)."</td>";
                  $cadenaHTML .="<td>".  pg_result($resultado,$cont,4)."</td>";
                  $cadenaHTML .="</tr>";       
              }
             $cadenaHTML.="</table>";   
        }else{
            $cadenaHTML.="<b>No hay registros en la base de datos</b>";  
        }
        header('location: ../index.php?page=estudiantes&&info_list='.$cadenaHTML);
    }
    public function buscar(clsEstudiante $obj){
        $slq="select id,codigo,nombre,apellido,cedula,edad from estudiantes "
                . "WHERE codigo='".$obj->getCodigo()."'";
        $resultado = $this->objCon->ejecutar($slq);
        $this->objCon->convertirJSON($resultado);
        
    
    
        //$this->construirBusqueda($resultado);
    }

    public function  modificar(clsEstudiante $obj){
        
        $sql = "update estudiantes set codigo='".$obj->getCodigo()."'".
              ",nombre='".$obj->getNombre()."', apellido='".$obj->getApellido()."'".
              ",cedula='".$obj->getCedula()."', edad=".$obj->getEdad().
              //fijarse bien
               "WHERE codigo ='".$obj->getCodigo()."'";
        $resultado = $this->objCon->ejecutar($sql);
        $this->objCon->convertirJSONSinRetorno($resultado);
    }
    
    public function  eliminar(clsEstudiante $obj){
        
        $sql = "delete from estudiantes where codigo='".$obj->getCodigo()."'";
        $resultado = $this->objCon->ejecutar($sql);
        $this->objCon->convertirJSONSinRetorno($resultado);
    }
}
?>
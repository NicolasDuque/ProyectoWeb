<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    
        <script src="../Recursos/jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/gestionUsuario.js" type="text/javascript"></script>
        <link href="../Recursos/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../Recursos/css/style.css" rel="stylesheet" type="text/css"/>
        <title>Registro Usuarios</title>
    </head>
    <body>
          <header>
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Services home</a>
    </div>
    <ul class="nav navbar-nav">
     
 
    </ul>
  </div>
</nav>
        </header>

        <div class="container" >
            <div class="container">
                <div class="jumbotron alert-link">
                    <div class="container">
                        <h1>Registro Usuarios</h1>
                    </div>

                </div>
            </div>
            <section class="main row ">
                <article class="col-xs-3 col-sm-3 col-md-3 ">
                  
                </article>
                <div class="col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Formulario de Inscripción</h3>
                        </div>
                        <div class="panel-body">
                            
                            <div class="form-group">
                                <form name="formularioRegistroUsuarios" method="post" action="Controlador/gestionEstudiante.php">
                                    <input type="text" id="txtId" name="idUsuario" class="oculto" style="display: none"><br>
                                <label>Codigo: </label><br>
                                <input type="text" id="txtCodigo" name="codigo" class="form-control" placeholder="Codigo"><br>
                                 <label>Nombre: </label><br>
                                 <input type="text" id="txtNombre" name="nombre" class="form-control" placeholder="Nombre"><br>
                                 <label>Apellido: </label><br>
                                 <input type="text" id="txtApellido" name="apellido" class="form-control" placeholder="Apellido"><br>
                                 <label>Cedula: </label><br>
                                 <input type="text" id="txtCedula" name="cedula" class="form-control" placeholder="cedula"><br>
                                 <label>Edad: </label><br>
                                 <input type="text" id="txtEdad" name="edad" class="form-control" placeholder="edad"><br>
                                 <label>Usuario: </label><br>
                                 <input type="text" id="txtUsuario" name="usuario" class="form-control" placeholder="usuario"><br>
                                 <label>Contraseña: </label><br>
                                 <input type="password" id="txtContraseña" name="password" class="form-control" placeholder="Contraseña"><br>
                             
                                  <input type="text" id="txtType" name="type" class="oculto" style="display: none">
                                 
                               
                                            <div class="row">
                                                <div class=" col-md-12">
                                             <button href="#ventana1" type="button" id="btnRegistrar2" class="btn btn-lg btn-group-vertical btn-success form-control" data-toggle="modal" onclick="validarUsuario('save')">REGISTRARSE</button>
                                         
                                    </div>
                                </div><br>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
 
   



                <aside class="col-xs-3 col-sm-3 col-md-3">
                 
                </aside>  

            </section>
            <div class="container">
<div class="modal fade" id="ventana1">
     <div class="modal-dialog">
         <div class="modal-content">
             <!-- header de nuestra ventana-->
             <div class="modal-header alert-info" id="color">
                 <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-tittle">Subasta.com!!!</h4>
             </div>
              <!-- contenido ventana-->
              <div class="modal-body">
                 
                  <p id="mensajeU">
                  </p>
             </div>
              
              <!-- footer ventana-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">cerrar</button>
             </div>
         </div>
     </div>
    
</div>
 </div>


        </div>
        <div class="container">
            <footer><h3>PIE DE PAGINA</h3></footer>
        </div>
    </body>
</html>

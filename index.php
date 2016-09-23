<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="Recursos/jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
        <link href="Recursos/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="Recursos/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Recursos/js/gestionLogin.js" type="text/javascript"></script>
        <title>Proyecto Servicios</title>
    </head>
    <body>
      
          <header>
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Services Home</a>
    </div>
    <ul class="nav navbar-nav">
     
 
    </ul>
  </div>
</nav>
        </header>

        <div class="container" >
            <div class="container">
                <div class="jumbotron alert-link alert-dismissable">
                    <div class="container">
                        <h1>BIENVENIDOS</h1>
                    </div>

                </div>
            </div>
            <section class="main row ">
                <article class="col-xs-3 col-sm-3 col-md-3 ">
                   
                </article>
                <div class="col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <form name="formularioLogin" method="post" action="Controlador/gestionLogin.php" class="fomuLogin"> 
                            <div class="form-group">
                                <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" id="txtNickName" class="form-control" placeholder="Username">
                                </div><br>
                                <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" id="txtContraseña"class="form-control" placeholder="Password"><br>
                        
                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <button type="button" href="#ventana1" data-toggle="modal" id="btnLogin" class="form-control btn btn-lg btn-success" onclick="validarLogin('con')">Login</button>
                                    </div>
                                </div><br>

                                <div class="container">
                                   
                                    <a class="active text-info" href="Vista/registroUsuarios.php">
                                        Registrarse...
                                    </a>
                                </div>
                                 <input type="text" id="txtType" name="type" style="display: none">  
                            </div>
                            </form>
                        </div>
                    </div>
                </div>





                <aside class="col-xs-3 col-sm-3 col-md-3">
                   
                </aside>  

            </section>


        </div>
        <div class="container">
            <footer><h3>PIE DE PAGINA</h3></footer>
        </div>
          <!-- Inicio Modal-->
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
    </body>
</html>

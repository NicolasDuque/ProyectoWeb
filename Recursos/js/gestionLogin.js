function validarLogin(tipo){
     
    var ti = document.getElementById("txtType").value= tipo;
  
    
    
   if(tipo==="con"){
       
       if(document.getElementById("txtNickName").value === "" || document.getElementById("txtContraseña").value ==="")
       {
            $('#color').removeClass('alert-info').addClass('alert-warning');
            document.getElementById("mensajeU").innerHTML = "<b>Favor Ingresar todos los datos requeridos</b>"
          
       }
       if(document.getElementById("txtNickName").value !="" && document.getElementById("txtContraseña").value !=""){
           
           enviarDatosAjax();
       }
   }
    
    
    
    if(tipo==="desc"){
         
        desconectarAjax();
    }
}
    function desconectarAjax(){
    var tipo = $("#txtType").val();
    
 
    $.ajax({
        type: 'post', //tipo envio   //beforeSend se ejecuta antes de enviar datos por el servidor
        url: "Controlador/gestionLogin.php",
        beforeSend: function () {
            //alert("accion antes de enviar");
        },
        data: { type: tipo},
        success: function (data) {
            alert(data);
             if(data==="1"){
             window.location = "Vista/inicio.html";
         }else{
             alert("no existe el usuario");
         }
        
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado:"+ "\nException");
            alert("Verifique la ruta");
        }
    });   
    }
    function enviarDatosAjax(){
    var usuario = $("#txtNickName").val();
    var password = $("#txtContraseña").val();
    var tipo = $("#txtType").val();
    $.ajax({
        type: 'post', //tipo envio   //beforeSend se ejecuta antes de enviar datos por el servidor
        url: "Controlador/gestionLogin.php",
        beforeSend: function () {
            //alert("accion antes de enviar");
        },
        data: { usuario: usuario, password: password, type: tipo},
        success: function (data) {
            //alert(data);
            
             if(data==="1"){
               window.location = "Vista/inicio.html";
         }else{
             $('#color').removeClass('alert-info').addClass('alert-warning');
            document.getElementById("mensajeU").innerHTML = "<b>No existe el usuario</b>";
         }
         
        
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado:"+ "\nException");
            alert("Verifique la ruta");
        }
    });
    }




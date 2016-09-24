function validarUsuario(tipo){

    document.getElementById("txtType").value = tipo;

    if (tipo == "save") {
        if (document.getElementById("txtCodigo").value != "" && document.getElementById("txtNombre").value != "" &&
                document.getElementById("txtApellido").value != "" && document.getElementById("txtCedula").value != "" &&
                document.getElementById("txtEdad").value != "" &&
                document.getElementById("txtUsuario").value != "" && document.getElementById("txtContraseña").value != ""
               
               
                ) {
            enviarDatosAjaxUsuario();
        } else {
            $('#color').removeClass('alert-info').addClass('alert-warning');
            document.getElementById("mensajeU").innerHTML = "<b>Para completar el registro debe cargar todos los datos del formulario</b>"
        }
    }
    if (tipo == "update") {
        if (document.getElementById("txtNombre").value != "" && document.getElementById("txtApellido").value != "" &&
                document.getElementById("txtCodigo").value != "" && document.getElementById("txtCedula").value != "" &&
                document.getElementById("txtEdad").value != "" && document.getElementById("txtSemestre").value != "") {
            enviarDatosAjaxEstudiante();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos")
        }
    }
    if (tipo == "delete") {
        if (document.getElementById("txtCodigo").value != "") {
            enviarDatosAjaxEstudiante();
        } else {
            alert("Por favor busque el registro a eliminar");
        }
    }

    if (tipo == "search") {
        if (document.getElementById("txtCodigo").value != "") {
            alert("busco");
            enviarDatosAjaxEstudiante();
        } else {
            alert("Por favor ingrese el codigo del estudiante a buscar");
        }
    }
    if (tipo == "list") {
        enviarDatosAjaxEstudiante();
    }
    }
    function desconectarAjaxEstudiante() {
        var tipo = $("#txtType").val();
        $.ajax({
            type: 'post', //tipo envio   //beforeSend se ejecuta antes de enviar datos por el servidor
            url: "../Controlador/gestionEstudiante.php",
            beforeSend: function () {
                //alert("accion antes de enviar");
            },
            data: {type: tipo},
            success: function (data) {
                if (data === "1") {
                    window.location.reload();
                } else {
                    alert("no se ejecuto correctamente la accion")
                }

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error detectado:" + "\nException");
                alert("Verifique la ruta");
            }
        });
    }

    function enviarDatosAjaxUsuario() {
        var codigo = $("#txtCodigo").val();
        var nombre = $("#txtNombre").val();
        var apellido= $("#txtApellido").val();
        var cedula = $("#txtCedula").val();
         var edad = $("#txtEdad").val();
        var usuario = $("#txtUsuario").val();
        var password = $("#txtContraseña").val();
        var tipo = $("#txtType").val();
        alert(password);
        
        $.ajax({
            type: 'POST', //tipo envio   //beforeSend se ejecuta antes de enviar datos por el servidor
            url: "../Controlador/gestionEstudiante.php",
            beforeSend: function () {
                //alert("accion antes de enviar");
            },
            data: {codigo: codigo,nombre: nombre, apellido: apellido, cedula: cedula,
                edad: edad, usuario: usuario, password: password, type: tipo},
            success: function (data) {
                alert(data);
                //el eval es funcion de javascript que convierte un 
                //json en un array nombrado ("objeto")
                var info = eval("("+data+")");
                //var info = eval("("+this.responseText+")");
                
                if (tipo === "save")
                {
                if(info[0].res==="1"){
                     $('#color').removeClass('alert-info').addClass('alert-warning');
                    document.getElementById("mensajeU").innerHTML = "<b>El usuario fue registrado correctamente</b>";
                    window.location.reload();
                    window.location="../index.php";
                }else{
                     $('#color').removeClass('alert-info').addClass('alert-warning');
                      document.getElementById("mensajeU").innerHTML = "<b>Cedula de usuario ya se encuentra registrada</b>";
                }
            }
            if (tipo === "delete")
                {
                if(info[0].res==="1"){
                    alert("Elimino exitosamente");
                }else{
                    alert("Error en la operacion");
                }
            }
            if (tipo ==="search")
            {
                
                var nombre = info[0].nombre;
                var apellido = info[0].apellido;
                var cedula = info[0].cedula;
                var edad = info[0].edad;
                var semestre = info[0].semestre;
                document.getElementById('txtNombre').value= nombre;
                document.getElementById('txtApellido').value= apellido;
                document.getElementById('txtCedula').value= cedula;
                document.getElementById('txtEdad').value= edad;
                document.getElementById('txtSemestre').value= semestre;
            }
            if (tipo ==="update")
            {
                if(info[0].res==="1"){
                    alert("Actualizo exitosamente");
                }else{
                    alert("Error en la operacion");
                }
            }
            
            if(tipo === "list")
            {
             var info = eval("(" + data + ")");

    var lista = "<tr>\n\
                    <td><b>Codigo</b></td>\n\
                    <td><b>Nombre</b></td>\n\
                    <td><b>Apellido</b>\n\
                    </td><td><b>Cedula</b>\n\
                    </td><td><b>Edad</b>\n\
                    </td><td><b>Semestre</b></td>\n\
                </tr>";

    
        if (info.length > 0) {
            for (f = 0; f < info.length; f++) {
                lista = lista + "<tr>"
                lista = lista + "<td>" + info[f].codigo + "</td>";
                lista = lista + "<td>" + info[f].nombre + "</td>";
                lista = lista + "<td>" + info[f].apellido + "</td>";
                lista = lista + "<td>" + info[f].cedula + "</td>";
                lista = lista + "<td>" + info[f].edad + "</td>";
                lista = lista + "<td>" + info[f].semestre + "</td>";
                lista = lista + "</tr>"
            }
        

        document.getElementById("tableDin").innerHTML = lista;
    }
   else {
        document.getElementById("tableDin").innerHTML = "<b>No se encuentra informacion</b>"
        limpiar();
    }
            }

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error detectado:" + "\nException");
                alert("Verifique la ruta");
            }
        });
        
        

    }


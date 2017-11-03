$(document).ready(function(){

if($("#usuario").val()!=""){
    $(".btn-log-clientes").css("visibility","hidden");
    $(".btn-nuevo-clientes").css("visibility","hidden");
    $(".fa-user").css("visibility","show");
    $(".btn-salir").css("visibility","show");
}else{
    $(".btn-log-clientes").css("visibility","show");
    $(".btn-nuevo-clientes").css("visibility","show");
    $(".fa-user").css("visibility","hidden");
    $(".btn-salir").css("visibility","hidden");
}

/*---------Esto es para ser el registro de clientes------*/
$(".btn-salir").on("click",function(){
    $.ajax({
        url:"scripts/session-destroy.php",
        success:function(result){
           location.reload();
        }
    });
});

$(".btn-nuevo-clientes").on("click",function(){
     $.ajax({
            url:"modal/modal-nuevo-clientes.php",
            success:function(result){
            
            $("#modal-log").html(result);
            $("#modal-log").modal("show");
            LogeoRegistro();
          }
    });      
});

/*-----cierro el registro de clientes----*/
/*-----Hagio login de clientes----*/

$(".btn-log-clientes").on("click",function(){
    
    $.ajax({
        url:"modal/modal-login-clientes.php",
        success:function(result){
             $("#modal-adm").html("");
            $("#modal-adm").html(result);
            $("#modal-adm").modal("show");
            $("#registro").on("click",function(){
            
            
                $.ajax({
                      url:"modal/modal-nuevo-clientes.php",
                      success:function(result){
                        $("#modal-adm").modal("hide");
                        $("#modal-adm").html("");
                        $("#modal-log").html(result);
                        $("#modal-log").modal("show");
                         LogeoRegistro();
                      }
                });      
            });
            $(".clientes-login").on("click",function(){
                if($("#email").val()=="" || $("#contrasena").val()==""){
                  $.ajax({
                            url:"modal/modal-warning.php",
                            success:function(result){
                               $("#modal-advertencia").html("");
                                // $("#modal-adm").modal("hide");
                                $("#modal-advertencia").html(result);
                                $("#titulo-modal").html("Error de ingreso");
                                $("#mensaje-modal").html("Complete los campos para poder ingresar correctamente.");
                                $("#modal-advertencia").modal("show");

                            }
                        });
                }else{
                $.ajax({
                    type:"POST",
                    url:"scripts/clientes-logeo.php",
                    data:{
                        "email":$("#email").val(),
                        "contrasena":$("#contrasena").val()
                    },
                    success:function(result){
                        
                       if(result=="Error"){
                        $.ajax({
                            url:"modal/modal-warning.php",
                            success:function(result){
                               $("#modal-advertencia").html("");
                                $("#modal-advertencia").html(result);
                                $("#titulo-modal").html("Error de ingreso");
                                $("#mensaje-modal").html("Usted ha ingresado datos invalidos, revise sus credenciales.");
                                $("#modal-advertencia").modal("show");

                            }
                        });
                        // alert("Contraseña y/o email incorrectos. Vuelva a intentarlo.");
                       }else{
                        location.reload();
                       }
                    }
                });
                }
            });
        }
    });
});


$(".clientes-nuevo").on("click",function(){
  
     verificoemail();

        
});



$("#modificadacontrasena").on("click",function(){


    $.ajax({
            type:"POST",
            url:"scripts/restablecerc.php",
            data:{
                "correo":$("#correo").val(),
                 "cliente":$("#cliente").val(),  
                  "contrasena":$("#contrasena").val()       
            },
            success:function(result){
               
              alert("SU CONTRASEÑA HA SIDO MODIFICADA INGRESE NUEVAMENTE A LA CUENTA");


        location.href="http://www.institutobrienza.com.ar/factura/index.php"
            }
        });


});

$("#recuperarcontra").on("click",function(){


    $.ajax({
            type:"POST",
            url:"scripts/buscoemail.php",
            data:{
                "email":$("#email").val()       
            },
            success:function(result){
               
                if(result==1){
                  alert("enviamos un email a su casilla de correo para restablecer la contraseña")
                       //$('.clientes-nuevo').attr('disabled', false);
                }else{
                   alert("ese email no se encuantra en nuestra base de datos")
                }
            }
        });


});



});

/*-----cierro login de clientes----*/

/*-----cierro document ready----*/

function LogeoRegistro(){
$(".clientes-nuevo").on("click",function(){
    
if($("#nombre").val()=="" || $("#apellido").val()=="" || $("#email").val()=="" || $("#contrasena").val()==""){
                   $.ajax({
                            url:"modal/modal-warning.php",
                            success:function(result){
                               $("#modal-advertencia").html("");
                                
                                $("#modal-advertencia").html(result);
                                $("#titulo-modal").html("Error de registro");
                                $("#mensaje-modal").html("Revise que los siguientes campos se hayan completado correctamente.");
                                $("#modal-advertencia").modal("show");

                            }
                        });
                   /* alert("Ingrese nombre");*/
                }
                 else if($("#contrasena").val()!=$("#contrasena2").val()){
                    $.ajax({
                            url:"modal/modal-warning.php",
                            success:function(result){
                                $("#modal-advertencia").html("");
                                $("#modal-advertencia").html(result);
                                $("#titulo-modal").html("Error de registro");
                                $("#mensaje-modal").html("Las contraseñas ingresadas son diferentes");
                                $("#modal-advertencia").modal("show");

                            }
                        });
                }else{
                    $.ajax({
                        type:"POST",
                        url:"scripts/clientes-store.php",
                        data:{
                            nombre:$("#nombre").val(),
                            telefono:$("#telefono").val(),
                            apellido:$("#apellido").val(),
                            email:$("#email").val(),
                            contrasena:$("#contrasena").val()
                        },
                        success:function(result){
alert(result)
                           if(result==0){

                        $.ajax({
                            url:"modal/modal-warning.php",
                            success:function(result){
                               $("#modal-advertencia").html("");
                                $("#modal-adm").modal("hide");
                                $("#modal-advertencia").html(result);
                                $("#titulo-modal").html("¡Registro exitoso!");
                                $("#mensaje-modal").html("Recuerde confirmar su email para poder concretar la descarga de su producto deseado.");
                                $("#modal-advertencia").modal("show");

                            }
                        });
                            location.reload();
                            $("#modal-adm").modal("hide");
                            $("#modal-adm").html("");


                           }else{
                            alert("Este email se encuentra en nuestra base de datos.");
                        }
                        }

                    });
                }
            });


}

function verificoemail(){

    $.ajax({
            type:"POST",
            url:"scripts/verifico-email.php",
            data:{
                "email":$("#email").val()       
            },
            success:function(result){
                alert(result)
                if(result==0){
                    $("#tilde-verde").html("<img src=images/tilde-verde.png>");
                       //$('.clientes-nuevo').attr('disabled', false);
                      
                }else{
                    alert("Este email se encuentra en nuestra base de datos.");
                   
                }
            }
        });

}





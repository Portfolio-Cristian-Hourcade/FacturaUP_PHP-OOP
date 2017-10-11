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
                    alert("Complete todos campos para logearse correctamente.");
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
                        alert("Contraseña y/o email incorrectos. Vuelva a intentarlo.");
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
});

/*-----cierro login de clientes----*/

/*-----cierro document ready----*/

function LogeoRegistro(){
$(".clientes-nuevo").on("click",function(){
    
if($("#nombre").val()==""){
                    alert("Ingrese nombre");
                }
                else if($("#apellido").val()==""){
                    alert("Ingrese apellido");
                }
                else if($("#email").val()==""){
                    alert("Ingrese email");
                }
                else if($("#contrasena").val()==""){
                    alert("Ingrese contrasena");
                }
                 else if($("#contrasena").val()!=$("#contrasena2").val()){
                    alert("las contraseñas deben ser iguales");
                }


                
                else{
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
                            alert("¡Registro exitoso!");
                            $("#modal-adm").modal("hide");
                            $("#modal-adm").html("");
                        }

                    });
                }
            });

}



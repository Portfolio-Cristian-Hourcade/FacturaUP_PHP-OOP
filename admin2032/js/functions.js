 window.onload = function() {
     Notif();
     Notifconsultas();
     ListarLinks();
     ListarAdmin();
     ListarClientes();
     ListarConsultas();
     ListarVentas();
     ListarSoporte();
     /*$(document).ready(function(){

     ListarLinks();
     ListarAdmin();
     ListarClientes();
     /* ---------------   Logeo del admin!   --------------------- */

     $(".adm-log").on("click", function() {
         $.ajax({
             type: "POST",
             url: "../scripts/adm-logeo.php",
             data: {
                 "usuario": $("#user").val(),
                 "contra": $("#contra").val()
             },
             success: function(result) {
                 if (result == "Error") {
                     /*alert("Su usuario o contraseña son incorrectas, vuelva a intentarlo.");*/

                     //Start Ajax
                    $.ajax({ 
                        url: "modal/modal-warning.php",
                        success: function(result) {
                            $("#modal-advertencia").html("");
                            $("#modal-advertencia").html(result);
                            $("#mensaje-modal").html("Su usuario o contraseña son incorrectas, vuelva a intentarlo.");
                            $("#modal-advertencia").modal("show");
                        }
                    });
                    //End Ajax
                 } else {
                     location.href = "index.php";
                 }
             }
         });
     });

     /*--------------------------------------------------*/


     /*-----------------  Deslogeo Admin!  -----------------------------*/

     $(".deslogeo").on("click", function() {
         $.ajax({
             url: "../scripts/destroy-session.php",
             success: function(result) {
                 location.href = "login.php";
             }
         })
     });

     /*---------------------------------------------------------*/

     /*-----------------------------Check Todos---------------------------------*/

     $(".todos").on("click", function() {
         var todos = ($(this).prop('checked') == true) ? true : false;
         $(".tilde").each(function() {
             this.checked = todos;
         });

     });

     /*-------------------------------------------------------------------------*/

     /*------------------ ModalNuevoADM -------------------------*/

     $(".btn-nuevo-adm").on("click", function() {
         $.ajax({
             url: "../modal/modal-nuevo-admin.php",
             success: function(result) {
                 $("#modal-adm").html(result);
                 $("#modal-adm").modal("show");
                 $(".adm-nuevo").on("click", function() {
                     if ($("#contra").val() != $("#contrad").val()) {
                        /* alert("Usted ha ingresado contraseñas diferentes.");*/

                         $("#modal-advertencia").html("");
                         $("#modal-advertencia").html(result);
                         $("#mensaje-modal").html("Usted ha ingresado contraseñas diferentes.");
                         $("#modal-advertencia").modal("show");

                     } else if ($("#usuario").val() == "" || $("#contra").val() == "" || $("#contrad").val() == "") {
                         //alert("Complete todos los campos.");

                          //Start Ajax
                    $.ajax({ 
                        url: "modal/modal-warning.php",
                        success: function(result) {
                            $("#modal-advertencia").html("");
                            $("#modal-advertencia").html(result);
                            $("#mensaje-modal").html("Complete todos los campos.");
                            $("#modal-advertencia").modal("show");
                        }
                    });
                    //End Ajax
                     } else {
                         $.ajax({
                             type: "POST",
                             url: "../scripts/adm-store.php",
                             data: {
                                 user: $("#usuario").val(),
                                 pass: $("#contra").val()
                             },
                             success: function(result) {
                                 ListarAdmin();
                                 $("#modal-adm").modal("hide");
                                 $("#modal-adm").html("");
                             }

                         });
                     }
                 });
             }
         });
     });

     /*----------------------------------------------------------*/

     /*--------------------- BorrarADM --------------------------*/

     $(".btn-borrar-adm").on("click", function() {
         var sel = "";
         $(".tilde").each(function() {
             if (this.checked == true) {
                 sel += "|" + this.value;
             }
         });
         if (sel == "") {
             //alert("Seleccione almenos un registro.");

              	//Start Ajax
$.ajax({
    url: "modal/modal-warning.php",
    success: function(result) {
        $("#modal-advertencia").html("");
        $("#modal-advertencia").html(result);
        $("#mensaje-modal").html("Seleccione almenos un registro.");
        $("#modal-advertencia").modal("show");
    }
});
//End Ajax
         } else {
             $.ajax({
                 type: "POST",
                 url: "../scripts/adm-destroy.php",
                 data: {
                     "sel": sel
                 },
                 success: function(result) {
                     ListarAdmin();
                 }
             });
         }
     });
     /*--------------------------------------------------------*/

     /*------------------- Editar Admin ------------------------*/

     $(".btn-editar-adm").on("click", function() {

         var edit = "";

         $(".tilde").each(function() {
             if (this.checked == true) {
                 edit += "|" + this.value;
             }
         });

         var elegido = edit.split("|");

         if (edit == "") {
             alert("Debe seleccionar un registro.");
         } else if (elegido.length != 2) {
             alert("Solamente seleccione un registro.");
         } else {

             $.ajax({
                 type: "POST",
                 url: "../modal/modal-edit-admin.php",
                 data: {
                     "id": elegido[1]
                 },
                 success: function(result) {

                     $("#modal-adm").html("");
                     $("#modal-adm").html(result);
                     $("#modal-adm").modal("show");
                     $(".btn-up-adm").on("click", function() {
                         $.ajax({
                             type: "POST",
                             url: "../scripts/adm-update.php",
                             data: {
                                 "id": $("#id").val(),
                                 "user": $("#usuario").val(),
                                 "pass": $("#contra").val()
                             },
                             success: function(result) {
                                 ListarAdmin();
                                 $("#modal-adm").html("");
                                 $("#modal-adm").modal("hide");
                             }
                         });
                     });

                 }

             });
         }
     });













     /*----------------------------------------------------------------*/








     /*---------------------- Desactivar Link ---------------------------*/
     /*---------Esto es para ser el store de clientes------*/


     $(".btn-nuevo-clientes").on("click", function() {
         $.ajax({
             url: "../modal/modal-nuevo-clientes.php",
             success: function(result) {
                 $("#modal-adm").html(result);
                 $("#modal-adm").modal("show");
                 $(".clientes-nuevo").on("click", function() {

                     if ($("#nombre").val() == "") {|
                         alert("Ingrese nombre");
                     } else if ($("#apellido").val() == "") {
                         alert("Ingrese apellido");
                     } else if ($("#email").val() == "") {
                         alert("Ingrese email");
                     } else if ($("#telefono").val() == "") {
                         alert("Ingrese telefono");
                     } else if ($("#contrasena").val() == "") {
                         alert("Ingrese contrasena");
                     } else {
                         $.ajax({
                             type: "POST",
                             url: "../scripts/clientes-store.php",
                             data: {
                                 nombre: $("#nombre").val(),
                                 telefono: $("#telefono").val(),
                                 apellido: $("#apellido").val(),
                                 email: $("#email").val(),
                                 contrasena: $("#contrasena").val()
                             },
                             success: function(result) {

                                 ListarClientes();
                                 $("#modal-adm").modal("hide");
                                 $(document).find('body').css('overflow', 'auto');
                                 $("#modal-adm").html("");
                             }

                         });
                     }
                 });
             }
         });
     });

     $(".btn-borrar-clientes").on("click", function() {
         var sel = "";
         $(".tilde").each(function() {
             if (this.checked == true) {
                 sel += "|" + this.value;
             }
         });
         if (sel == "") {
             alert("Seleccione almenos un registro.");
         } else {
             $.ajax({
                 type: "POST",
                 url: "../scripts/clientes-destroy.php",
                 data: {
                     "sel": sel
                 },
                 success: function(result) {
                     ListarClientes();
                 }
             });
         }
     });


     $(".btn-editar-clientes").on("click", function() {

         var edit = "";

         $(".tilde").each(function() {
             if (this.checked == true) {
                 edit += "|" + this.value;
             }
         });

         var elegido = edit.split("|");

         if (edit == "") {
             alert("Debe seleccionar un registro.");
         } else if (elegido.length != 2) {
             alert("Solamente seleccione un registro.");
         } else {

             $.ajax({
                 type: "POST",
                 url: "../modal/modal-edit-clientes.php",
                 data: {
                     "id": elegido[1]
                 },
                 success: function(result) {

                     $("#modal-adm").html("");
                     $("#modal-adm").html(result);
                     $("#modal-adm").modal("show");
                     $(".btn-up-clientes").on("click", function() {
                         $.ajax({
                             type: "POST",
                             url: "../scripts/clientes-update.php",
                             data: {
                                 "id": $("#id").val(),
                                 "nombre": $("#nombre").val(),
                                 "apellido": $("#apellido").val(),
                                 "email": $("#email").val(),
                                 "contrasena": $("#contrasena").val(),
                                 "telefono": $("#telefono").val()

                             },
                             success: function(result) {
                                 ListarClientes();
                                 $("#modal-adm").html("");
                                 $("#modal-adm").modal("hide");
                             }
                         });
                     });

                 }

             });
         }
     });


     /*});/* /.DocumentReady./*/

     function ListarLinks() {
         $.ajax({
             url: "../scripts/link-list.php",
             success: function(result) {
                 $("#list-links").html(result);
                 $(".activar").on("click", function() {
                     var id = $(this).val();
                     ActivarLink(id);
                 });
                 $(".desactivar").on("click", function() {
                     var id = $(this).val();
                     DesactivarLink(id);
                 });
             }
         });
     }

     function ListarAdmin() {
         $.ajax({
             url: "../scripts/adm-list.php",
             success: function(result) {
                 $("#list-admin").html(result);
             }
         });
     }

     function ListarSoporte() {
         $.ajax({
             url: "../scripts/soporte-list.php",
             success: function(result) {

                 $("#list-soporte").html(result);
                 Contestar();

             }
         });
     }

     function ListarClientes() {
         $.ajax({
             url: "../scripts/clientes-list.php",
             success: function(result) {
                 $("#list-clientes").html(result);

             }
         });
     }

     function ListarConsultas() {
         $.ajax({
             url: "../scripts/consultas-list.php",
             success: function(result) {
                 $("#list-consultas").html(result);
                 Contestarconsulta();
             }
         });
     }

     function ListarVentas() {
         $.ajax({
             url: "../scripts/ventas-list.php",
             success: function(result) {
                 $("#list-ventas").html(result);

             }
         });
     }

     function DesactivarLink(id) {
         $.ajax({
             type: "POST",
             url: "../scripts/link-update.php",
             data: {
                 "info": 1,
                 "id": id
             },
             success: function(result) {
                 ListarLinks();
             }
         });
     }

     function ActivarLink(id) {
         $.ajax({
             type: "POST",
             url: "../scripts/link-update.php",
             data: {
                 "info": 0,
                 "id": id
             },
             success: function(result) {
                 ListarLinks();
             }
         });
     }

     function Contestarconsulta() {
         $(".res-consulta").on("click", function() {
             var valor = $(this).val();

             $.ajax({
                 type: "POST",
                 url: "../modal/modal-edit-consulta.php",
                 data: {
                     id: valor
                 },
                 success: function(result) {
                     $("#modal-consultas").html("");
                     $("#modal-consultas").html(result);
                     $("#modal-consultas").modal("show");
                     $(".btn-contestar-consulta").on("click", function() {

                         $.ajax({
                             type: "POST",
                             url: "../scripts/enviorespuesta.php",
                             data: {
                                 messageToMail: $("#mensaje").val(),
                                 email: $("#email-consulta").val()
                             },
                             success: function(result) {
                                 alert("Se ha enviado la respuesta al cliente");
                             }
                         });
                         $.ajax({
                             type: "POST",
                             url: "../scripts/consultas-update.php",
                             data: {
                                 id: $("#id").val(),
                                 mensajeResp: $("#mensaje").val()
                             },
                             success: function(result) {
                                 ListarConsultas();
                                 $("#modal-consultas").html("");
                                 $("#modal-consultas").modal("hide");
                             }
                         });



                     });
                 }
             });
         });
     }


     function Contestar() {
         $(".res-mensaje").on("click", function() {
             var valor = $(this).val();

             $.ajax({
                 type: "POST",
                 url: "../modal/modal-edit-soporte.php",
                 data: {
                     id: valor
                 },
                 success: function(result) {
                     $("#modal-soporte").html("");
                     $("#modal-soporte").html(result);
                     $("#modal-soporte").modal("show");
                     ResponderMen();
                 }
             });
         });
     }

     function Notif() {
         $.ajax({
             url: "../scripts/soporte-notif.php",
             success: function(result) {
                 $(".not-soport").html(result);
             }
         });
     }


     function Notifconsultas() {
         $.ajax({
             url: "../scripts/consulta-notif.php",
             success: function(result) {
                 $(".not-consulta").html(result);
             }
         });
     }

     function ResponderMen() {
         $(".btn-up-soporte").on("click", function() {

             $.ajax({
                 type: "POST",
                 url: "../scripts/soporte-respuesta.php",
                 data: {
                     email: $("#email-soporte").val(),
                     mensaje: $("#mensaje").val()
                 },
                 success: function(result) {}
             });
             $.ajax({
                 type: "POST",
                 url: "../scripts/soporte-update.php",
                 data: {
                     id: $("#id").val(),
                     mensaje: $("#mensaje").val()
                 },
                 success: function(result) {
                     ListarSoporte();
                     $("#modal-soporte").html("");
                     $("#modal-soporte").modal("hide");
                 }
             });
         });
     }
 }
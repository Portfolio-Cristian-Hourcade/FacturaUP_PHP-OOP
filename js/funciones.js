var f = new Date();

$(document).ready(function() {


    $(".btn-descargar-demo").on("click", function() {
        $.ajax({
            type: "POST",
            url: "scripts/verifico-descargas.php",
            data: {
                email: $("#email").val()
            },
            success: function(result) {
               
                if (result < 3) {
                    location.href = "scripts/demo-descarga.php";

                    $.ajax({
                        type: "POST",
                        url: "admin2032/scripts/demo-store.php",
                        data: {
                            fecha: f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear()
                        },
                        success: function(result) {
                           
                        }
                    });
                    setTimeout("r()", 1500);
                } else {
                    $("#modal-advertencia").html("");
                    $("#modal-advertencia").html(result);
                    $("#mensaje-modal").html("Usted ha llegado al limite de descargas, si tiene alguna inquietud puede comunicarse con el equipo de facturaup.");
                    $("#modal-advertencia").modal("show");
                }

            }
        });


    });

    
// ------------------------- Mini-Carrito ------------------------------------------ //

    $(".demo-button").on("click", function() {
        $.ajax({
            url: "scripts/user-online.php",
            success: function(result) {
                if (result == "error") {
                    $.ajax({
                        url: "modal/modal-warning.php",
                        success: function(result) {
                            $("#modal-advertencia").html("");
                            $("#modal-advertencia").html(result);
                            $("#titulo-modal").html("Advertencia");
                            $("#mensaje-modal").html("Usted debe iniciar sesion para poder descargar el demo o la version premium.");
                            $("#modal-advertencia").modal("show");
                        }

                    });
                    $.ajax({
                        url: "modal/modal-nuevo-clientes.php",
                        success: function(result) {
                            $("#modal-log").html(result);
                            $("#modal-log").modal("show");
                        }
                    });
                } else {
                    location.href = "mini_carrito.php";
                }
            }
        });

 });
    

    // --------------------------------------------------------------------------------//
    // ------------------------ Descargar Demo --------------------------------------- //

    $(".demo-btn").on("click", function() {
        $.ajax({
            url: "admin2032/scripts/ver-cuenta.php",
            success: function(result) {
                if (result == 1) {
                
                $.ajax({
                    url: "modal/modal-warning.php",
                    success: function(result) {                                         
                        $("#modal-advertencia").html("");
                        $("#modal-advertencia").html(result);
                        $("#titulo-modal").html("Advertencia");
                        $("#mensaje-modal").html("Se ha enviado un correo con el link de descarga a tu E-mail registrado. Si tiene problemas para descargar contactese con ayuda al cliente.");
                        $("#modal-advertencia").modal("show");
                    }
                                    });
                    $.ajax({
                        type: "POST",
                        url: "admin2032/scripts/link-store.php",
                        data: {
                            fecha: f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear()
                        },
                        success: function(result) {
                            $.ajax({
                                url: "admin2032/scripts/clientes-email.php",
                                success: function(result) {}
                            });

                        }
                    });
                } else {
                    alert(result)
                }
            }
        });



    });
    // ----------------------------------------------------------------------- //
    // -----------------------------EnviarConsultaDesdeFrontEnd---------------------------//

    $(".enviar-formulario").on("click", function() {

        if ($("#cliente").val() == "") {
                $.ajax({
                url: "modal/modal-warning.php",
                success: function(result) {
                    $("#modal-advertencia").html("");
                    $("#modal-advertencia").html(result);
                    $("#titulo-modal").html("Advertencia");
                    $("#mensaje-modal").html("Ingrese nombre.");
                    $("#modal-advertencia").modal("show");
                }
            });


        } else if ($("#info-men").val() == "") {
            /*alert("Ingrese mensaje");*/

            $.ajax({
                url: "modal/modal-warning.php",
                success: function(result) {

                    $("#modal-advertencia").html("");
                    $("#modal-advertencia").html(result);
                    $("#titulo-modal").html("Advertencia");
                    $("#mensaje-modal").html("Ingrese mensaje.");
                    $("#modal-advertencia").modal("show");
                }
            });

        } else if ($("#contact").val() == "") {
            /*alert("Ingrese email");*/

            $.ajax({
                url: "modal/modal-warning.php",
                success: function(result) {

                    $("#modal-advertencia").html("");
                    $("#modal-advertencia").html(result);
                    $("#titulo-modal").html("Advertencia");
                    $("#mensaje-modal").html("Ingrese email.");
                    $("#modal-advertencia").modal("show");
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "envioconsulta.php",
                data: {
                    nombre: $("#cliente").val(),
                    mensaje: $("#info-men").val(),
                    email: $("#contact").val()
                },
                success: function() {
                    /*alert("Su consulta fue enviada a la brevedad le responderemos")*/

                    //Start Ajax
                    $.ajax({ 
                        url: "modal/modal-warning.php",
                        success: function(result) {
                            $("#modal-advertencia").html("");
                            $("#modal-advertencia").html(result);
                            $("#titulo-modal").html("¡Mensaje enviado!");
                            $("#mensaje-modal").html("Su consulta fue enviada a la brevedad le responderemos.");
                            $("#modal-advertencia").modal("show");
                        }
                    });
                    //End Ajax
                }

            });
        }
    });



});


(function() {
    function $MPC_load() {
        window.$MPC_loaded !== true && (function() {
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = document.location.protocol + "//secure.mlstatic.com/mptools/render.js";
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
            window.$MPC_loaded = true;
        })();
    }
    window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;
})();

function r() { location.href= "instructive.php"; }
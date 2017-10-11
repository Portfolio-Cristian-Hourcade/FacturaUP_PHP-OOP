var f = new Date();


$(document).ready(function() {
	$(".demo-button").on("click",function(){
		$.ajax({
			url:"scripts/user-online.php",
			success:function(result){
				if(result=="error"){
					alert("Usted debe registrarse o iniciar secion para poder descargar la demo o comprar la version premium de FacturaUp.");
					$.ajax({
          			 	 url:"modal/modal-nuevo-clientes.php",
           				 success:function(result){
           					$("#modal-log").html(result);
           					$("#modal-log").modal("show");
            				LogeoRegistro();
          				}
   					 }); 
				}else{
					location.href="mini_carrito.php";
				}
			}
		});
	});
$(".demo-btn").on("click",function(){

	$.ajax({
		url:"admin2032/scripts/clientes-email.php",
		success:function(result){
			alert("Se ha enviado un correo con el link de descarga a tu E-mail registrado. Si tiene problemas para descargar contactese con ayuda al cliente");
			alert(result);
		}
	});
	$.ajax({
        type:"POST",
		url:"admin2032/scripts/demo-store.php",
        data:{
            fecha: f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()
        },
		success:function(result){
			alert(result)
		}
	});
});


});
// var scroll_pos = 0;
// $(document).scroll(function() { 
//     scroll_pos = $(this).scrollTop();
//     if(scroll_pos > 200){
//         $(".tel-bottom").css('background-color', 'green');
//     } /*else if (scroll_pos >= 140) {
//         $(".tel-bottom").css('background-color', 'red');*/
    

// });






// /*smooth scroll*/
// $('a[href*=#]').click(function() {

//      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
//          && location.hostname == this.hostname) {

//              var $target = $(this.hash);

//              $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

//              if ($target.length) {

//                  var targetOffset = $target.offset().top;

//                  $('html,body').animate({scrollTop: targetOffset}, 1000);

//                  return false;

//             }

//        }

//    });
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();





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
                 
                            $("#modal-log").modal("hide");
                            $("#modal-log").html("");
                            alert("Registro exitoso, confirme el email para terminar el registro.")
                        }

                    });
                }
            });

}
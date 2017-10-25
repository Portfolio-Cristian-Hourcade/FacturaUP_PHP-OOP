var f = new Date();

$(document).ready(function() {

// ------------------------- Mini-Carrito ------------------------------------------ //

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

// --------------------------------------------------------------------------------//
// ------------------------ Descargar Demo --------------------------------------- //

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
    $.ajax({
        type:"POST",
        url:"admin2032/scripts/links-store",
        data:{
            fecha: f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()
        }
    });
});
// ----------------------------------------------------------------------- //
// -----------------------------EnviarFormulario---------------------------//
	
	$(".enviar-formulario").on("click",function(){

				if($("#nombre").val()==""){
					alert("Ingrese nombre");
				}
				else if($("#mensaje").val()==""){
					alert("Ingrese mensaje");
				}
				else if($("#email").val()==""){
					alert("Ingrese email");
				}
				else{
					$.ajax({
						type:"POST",
						url:"envioconsulta.php",
						data:{
							nombre:$("#nombre").val(),
							mensaje:$("#mensaje").val(),
							email:$("#email").val()
						},
						success:function(result){
							alert("Su consulta fue enviada a la brevedad le responderemos")
						}

					});
				}
			});

});

(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();



/*window.addEventListener('scroll', function() {*/
  /*if (window.scrollY >= 2000) {
    $('.tel-bottom').animate({left: '-150%'});
  }*/
/*  else if (window.scrollY >= 50 && window.scrollY <= 200){
    $('.tel-bottom').animate({left: '25%'}, 'swing');
  } 
  else if (window.scrollY >= 200) {
    $('.tel-bottom').animate({left: '100%'}, 'swing');
  }
 
});*/


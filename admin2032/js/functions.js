 window.onload = function() {
   ListarLinks();
ListarAdmin();
ListarClientes();

/*$(document).ready(function(){

ListarLinks();
ListarAdmin();
ListarClientes();
/* ---------------   Logeo del admin!   --------------------- */

	$(".adm-log").on("click",function(){
		$.ajax({
			type:"POST",
			url:"../scripts/adm-logeo.php",
			data:{
				"usuario":$("#user").val(),
				"contra":$("#contra").val()
			},
			success:function(result){
				if(result=="Error"){
					alert("Su usuario o contraseña son incorrectas, vuelva a intentarlo.");
				}else{
					location.href="index.php";
				}
			}
		});
	});

/*--------------------------------------------------*/


/*-----------------  Deslogeo Admin!  -----------------------------*/

$(".deslogeo").on("click",function(){
	$.ajax({
		url:"../scripts/destroy-session.php",
		success:function(result){
			location.href="login.php";
		}
	})
});

/*---------------------------------------------------------*/

/*-----------------------------Check Todos---------------------------------*/

$(".todos").on("click",function(){
	var todos=($(this).prop('checked')==true)?true:false;
		$(".tilde").each(function(){
			this.checked = todos;
		});

});

/*-------------------------------------------------------------------------*/

/*------------------ ModalNuevoADM -------------------------*/

$(".btn-nuevo-adm").on("click",function(){
	$.ajax({
		url:"../modal/modal-nuevo-admin.php",
		success:function(result){
			$("#modal-adm").html(result);
			$("#modal-adm").modal("show");
			$(".adm-nuevo").on("click",function(){
				if($("#contra").val()!=$("#contrad").val()){
					alert("Usted ha ingresado contraseñas diferentes.");
				}else if($("#usuario").val()=="" || $("#contra").val()=="" || $("#contrad").val()==""){
					alert("Complete todos los campos.");
				}else{
					$.ajax({
						type:"POST",
						url:"../scripts/adm-store.php",
						data:{
							user:$("#usuario").val(),
							pass:$("#contra").val()
						},
						success:function(result){
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

$(".btn-borrar-adm").on("click",function(){
	var sel="";
		$(".tilde" ).each(function(){
			if(this.checked==true){
				sel+="|"+this.value;					
			}
		});
		if(sel==""){
			alert("Seleccione almenos un registro.");
		}else{
			$.ajax({	
				type:"POST",
				url:"../scripts/adm-destroy.php",
				data: {
					"sel":sel
				},
				success: function(result){
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
                                "user":$("#usuario").val(),
                                "pass":$("#contra").val()
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


$(".btn-nuevo-clientes").on("click",function(){
	$.ajax({
		url:"../modal/modal-nuevo-clientes.php",
		success:function(result){
			$("#modal-adm").html(result);
			$("#modal-adm").modal("show");
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
				else if($("#telefono").val()==""){
					alert("Ingrese telefono");
				}
				else if($("#contrasena").val()==""){
					alert("Ingrese contrasena");
				}


				
				else{
					$.ajax({
						type:"POST",
						url:"../scripts/clientes-store.php",
						data:{
							nombre:$("#nombre").val(),
							telefono:$("#telefono").val(),
							apellido:$("#apellido").val(),
							email:$("#email").val(),
							contrasena:$("#contrasena").val()
						},
						success:function(result){
							
							ListarClientes();
							$("#modal-adm").modal("hide");
							$("#modal-adm").html("");
						}

					});
				}
			});
		}
	});
});

$(".btn-borrar-clientes").on("click",function(){
	var sel="";
		$(".tilde" ).each(function(){
			if(this.checked==true){
				sel+="|"+this.value;					
			}
		});
		if(sel==""){
			alert("Seleccione almenos un registro.");
		}else{
			$.ajax({	
				type:"POST",
				url:"../scripts/clientes-destroy.php",
				data: {
					"sel":sel
				},
				success: function(result){
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
                                "nombre":$("#nombre").val(),
                                "apellido":$("#apellido").val(),
                                "email":$("#email").val(),
                                "contrasena":$("#contrasena").val(),
                                "telefono":$("#telefono").val()

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

function ListarLinks(){
	$.ajax({
		url:"../scripts/link-list.php",
		success:function(result){
			$("#list-links").html(result);
			$(".activar").on("click",function(){
				var id = $(this).val();
				ActivarLink(id);
			});
			$(".desactivar").on("click",function(){
				var id = $(this).val();
				DesactivarLink(id);
			});
		}
	});
}
function ListarAdmin(){
	$.ajax({
		url:"../scripts/adm-list.php",
		success:function(result){
			$("#list-admin").html(result);
		}
	});
}
function ListarClientes(){
	$.ajax({
		url:"../scripts/clientes-list.php",
		success:function(result){
			$("#list-clientes").html(result);
			
		}
	});
}
function DesactivarLink(id){
	$.ajax({
		type:"POST",
		url:"../scripts/link-update.php",
		data:{
			"info":1,
			"id":id
		},
		success:function(result){
			ListarLinks();
		}
	});
}
function ActivarLink(id){
	$.ajax({
		type:"POST",
		url:"../scripts/link-update.php",
		data:{
			"info":0,
			"id":id
		},
		success:function(result){
			ListarLinks();
		}
	});
}


 }
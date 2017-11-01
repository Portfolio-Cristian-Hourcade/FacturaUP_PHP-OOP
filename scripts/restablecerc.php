<?php



	include '../class/clientes.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/


$mail=$_POST["correo"];
$contrasena=md5($_POST["contrasena"]);
$usuario=$_POST["cliente"];

/*----------------------------*/

/*------- SQL ---------------*/

 $sql="UPDATE clientes set cl_pass='$contrasena' where cl_email='".$mail."'";




$NewConnect = new Clientes();
$NewConnect->EditarClientes($sql);
//mando email de confirmacion



$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From:Factura Up<consultas@facturaup.com>'."\r\n";

$cuerpo ="

<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
<div style='width:95%;height:50px;margin:0 auto;
background-color:#000;color:#fff;text-align:center;font-size:13px;line-height:50px;'>

<h1 style='color:#fff;text-align:center;font-size:15px;line-height:50px;'>Factura UP</h1>


</div>
<div style='width:95%;height:400px;margin:0 auto;
background-color:#fff;border:#999 solid 1px;'>

<div style='width:85%;height:400px;margin:10px auto;
background-color:#fff;'>

Estimado/a ".$usuario."<br><br>
SU CONTRASEÑA HA SIDO MODIFICADA INGRESE NUEVAMENTE A LA CUENTA<BR>
Saluda Atte.
Factura UP</div></div>
</div>";
 
mail($mail,"Haz modificado tu contraseña", $cuerpo ,$headers);		


/*...........................*/



?>
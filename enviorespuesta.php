<?php

session_start();

	include 'class/conmysql.php';
	include 'class/consultas.php';

	/*--------- Variables --------*/

	$mensajote = $_POST["messageToMail"];

			$headers  = 'MIME-Version: 1.0'."\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
			$headers .= 'From:FacturaUp<facturaup@gmail.com>'."\r\n";

			$cuerpo ="

			<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
			<div style='width:95%;height:50px;margin:0 auto;
			background-color:#000;color:#fff;text-align:center;font-size:13px;line-height:50px;'>

			<h1 style='color:#fff;text-align:center;font-size:15px;line-height:50px;'>FacturaUp</h1>


			</div>
			<div style='width:95%;height:400px;margin:0 auto;
			background-color:#fff;border:#999 solid 1px;'>

			<div style='width:85%;height:400px;margin:10px auto;
			background-color:#fff;'>

			Estimado/a cliente<br><br>

			$mensajote

			Esta ha sido nuestra respuesta a su reclamo<br><br>Saluda cordialmente a ud. el
			Equipo de FacturaUp</div></div>
			</div>";
 

	/*	Constructores  */
	$NewObjeto = new Consultas();
	
	echo $NewObjeto->envioRespConsulta("ezequiel.r.gallo@gmail.com",$cuerpo,$headers);

?>

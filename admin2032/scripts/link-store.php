<?php 

session_start();
 
	include '../../class/links.php';
	include '../../class/conmysql.php';
$NewConnect = new Links();
	$fecha=$_POST["fecha"];
	$ip=$_SERVER["REMOTE_ADDR"];
$sql = "INSERT INTO link (l_user,l_link,l_ip,l_descargas,l_fecha) VALUES ('".$_SESSION["cl_email"]."',localhost/factura/descarga-demo.php?id='".$_SESSION["cl_email"]."','".$ip."',0,'".$fecha."')";
if($NewConnect->Contador($sql)){

echo $NewConnect->Alta($sql);

}else{
	echo "error";
}

?>
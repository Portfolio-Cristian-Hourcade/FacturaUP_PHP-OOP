<?php 
@$MesActual=date(n);
@$ano="20".date(y);

	include '../../../class/demo.php';
	include '../../../class/conmysql.php';

$NuevoObjeto = new Demos();

$enero=$NuevoObjeto->SumarMesDemo('/1/'.$ano);
$febrero=$NuevoObjeto->SumarMesDemo('/2/'.$ano);
$marzo=$NuevoObjeto->SumarMesDemo('/3/'.$ano);
$abril=$NuevoObjeto->SumarMesDemo('/4/'.$ano);
$mayo=$NuevoObjeto->SumarMesDemo('/5/'.$ano);
$junio=$NuevoObjeto->SumarMesDemo('/6/'.$ano);
$julio=$NuevoObjeto->SumarMesDemo('/7/'.$ano);
$agosto=$NuevoObjeto->SumarMesDemo('/8/'.$ano);
$septiembre=$NuevoObjeto->SumarMesDemo('/9/'.$ano);
$octubre=$NuevoObjeto->SumarMesDemo('/10/'.$ano);
$noviembre=$NuevoObjeto->SumarMesDemo('/11/'.$ano);
$diciembre=$NuevoObjeto->SumarMesDemo('/12/'.$ano);
// Ré loko e (/;_;)/
$enero2=$NuevoObjeto->SumarMesCom('/1/'.$ano);
$febrero2=$NuevoObjeto->SumarMesCom('/2/'.$ano);
$marzo2=$NuevoObjeto->SumarMesCom('/3/'.$ano);
$abril2=$NuevoObjeto->SumarMesCom('/4/'.$ano);
$mayo2=$NuevoObjeto->SumarMesCom('/5/'.$ano);
$junio2=$NuevoObjeto->SumarMesCom('/6/'.$ano);
$julio2=$NuevoObjeto->SumarMesCom('/7/'.$ano);
$agosto2=$NuevoObjeto->SumarMesCom('/8/'.$ano);
$septiembre2=$NuevoObjeto->SumarMesCom('/9/'.$ano);
$octubre2=$NuevoObjeto->SumarMesCom('/10/'.$ano);
$noviembre2=$NuevoObjeto->SumarMesCom('/11/'.$ano);
$diciembre2=$NuevoObjeto->SumarMesCom('/12/'.$ano);

	@$resultado="{'Mes':'Enero', 'a':".$enero.", 'b':".$enero2."},{'Mes':'Febrero', 'a':".$febrero.", 'b':".$febrero2."},{'Mes':'Marzo', 'a':".$marzo.", 'b':".$marzo2."},{'Mes':'Abril', 'a':".$abril.", 'b':".$abril2."},{'Mes':'Mayo', 'a':".$mayo.", 'b':".$mayo2."},{'Mes':'Junio', 'a':".$junio.", 'b':".$junio2."},{'Mes':'Julio', 'a':".$julio.", 'b':".$julio2."},{'Mes':'Agosto', 'a':".$agosto.", 'b':".$agosto2."},{'Mes':'Septiembre', 'a':".$septiembre.", 'b':".$septiembre2."},{'Mes':'Octubre', 'a':".$octubre.", 'b':".$octubre2."},{'Mes':'Noviembre', 'a':".$noviembre.", 'b':".$noviembre2."},{'Mes':'Diciembre', 'a':".$diciembre.", 'b':".$diciembre2."}";

	echo json_encode("[".$resultado."]");




	
	
      
?>



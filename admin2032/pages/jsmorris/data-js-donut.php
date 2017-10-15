<?php 
@$MesActual=date(n);
@$ano="20".date(y);

	include '../../../class/demo.php';
	include '../../../class/conmysql.php';

$NuevoObjeto = new Demos();

$demo=$NuevoObjeto->SumarMesDemo('/'.$MesActual.'/'.$ano);

// Ré loko e (/;_;)/

$pago=$NuevoObjeto->SumarMesCom('/'.$MesActual.'/'.$ano);

	@$resultado="{'label':'Demos descargados', 'value':".$demo."},{'label':'Premium descargados', 'value':".$pago."}";

	echo json_encode("[".$resultado."]");




	
	
      
?>



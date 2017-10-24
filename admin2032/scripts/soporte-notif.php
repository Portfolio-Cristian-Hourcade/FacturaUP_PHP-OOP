<?php

	include '../../class/soporte.php';
	include '../../class/conmysql.php';

$NuevoObjeto = new Soporte();

$sql="SELECT * FROM soporte WHERE so_respuesta='' AND so_status=1";

$NuevoObjeto->Notificaciones($sql);

?>
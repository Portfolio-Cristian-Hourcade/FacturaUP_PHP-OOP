<?php

	include '../../class/consultas.php';
	include '../../class/conmysql.php';

$NuevoObjeto = new Consultas();

$sql="SELECT * FROM consultas WHERE con_respuesta='' AND status=1";

$NuevoObjeto->Notificaciones($sql);

?>
<?php

	include '../class/conmysql.php';
	include '../class/ventas.php';

	$sql="INSERT INTO ventas(v_cliente,v_fecha,v_precio,v_plan,v_status) VALUES ('probando','12/12','100','unico',1)";

			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->AltaSql($sql);
			$con->CloseConnection();

	?>
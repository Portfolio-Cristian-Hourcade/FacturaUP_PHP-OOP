<?php	
	
	include '../class/ventas.php';
	include '../class/conmysql.php';

require_once "mercadopago.php";

$mp = new MP('3564165724970805', 'AmfRspIMgxTJHM2cYRI9VxCEOi0xgxHP');
$Connec = new Ventas();
if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
	http_response_code(400);
	return;
}
if ($merchant_order_info["status"] == 200) {
	// If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items 
	$paid_amount = 0;

	foreach ($merchant_order_info["response"]["payments"] as  $payment) {
		if ($payment['status'] == 'approved'){
			$paid_amount += $payment['transaction_amount'];
		}	
	}

	if($paid_amount >= $merchant_order_info["response"]["total_amount"])
	{
		if(count($merchant_order_info["response"]["shipments"]) > 0) 
		{ // The merchant_order has shipments
			if($merchant_order_info["response"]["shipments"][0]["status"] == "ready_to_ship"){
				


				 $sql="INSERT INTO ventas(v_cliente,v_fecha,v_precio,v_plan,v_status) VALUES ("'probando'","'12/12'","'100'","'unico'",1)";

				$Connec->AgregarVenta($sql);


				echo "El pago se realizo correctamente.";
			}
		} else { // The merchant_order don't has any shipments
			$sql="INSERT INTO ventas(v_cliente,v_fecha,v_precio,v_plan,v_status) VALUES ("'probando'","'12/12'","'100'","'unico'",1)";

				$Connec->AgregarVenta($sql);


				echo "El pago se realizo correctamente.";
		}
	} else {
		$sql="INSERT INTO ventas(v_cliente,v_fecha,v_precio,v_plan,v_status) VALUES ("'probando'","'12/12'","'100'","'unico'",1)";

				$Connec->AgregarVenta($sql);


				echo "El pago se realizo correctamente.";
	}
}

?>
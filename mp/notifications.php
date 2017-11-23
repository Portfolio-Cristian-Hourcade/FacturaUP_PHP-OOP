<?php	
	
	include '../class/ventas.php';
	include '../class/conmysql.php';

require_once "mercadopago.php";

$mp = new MP('1963189080821191', 'HbQ7cf8X7oj9KaK84MNUg6DjvfDsIk6u');
$paymentInfo = $mp->get_payment_info ($_GET["id"]);
$Connec = new Ventas();

if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
	http_response_code(400);
	return;
}

if($_GET["topic"] == 'payment'){
	$payment_info = $mp->get("/collections/notifications/" . $_GET["id"]);
	$merchant_order_info = $mp->get("/merchant_orders/" . $payment_info["response"]["collection"]["merchant_order_id"]);

	$nombre = $paymentInfo['response']['collection']['payer']['first_name'];
	$apellido = $paymentInfo['response']['collection']['payer']['last_name'];
	$email = $paymentInfo['response']['collection']['payer']['email'];
	$total = $paymentInfo['response']['collection']['total_paid_amount'];
	$sql="INSERT INTO ventas(v_cliente,v_fecha,v_precio,v_plan,v_status) VALUES ('".$email."','".$nombre."','".$total."','".$payment_info["response"]["collection"]["merchant_order_id"]."',1)";

			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->AltaSql($sql);
			$con->CloseConnection();

} else if($_GET["topic"] == 'merchant_order'){

	$merchant_order_info = $mp->get("/merchant_orders/" . $_GET["id"]);
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
				
				echo "El pago se realizo correctamente.";
			}
		} else { // The merchant_order don't has any shipments
	
				echo "El pago se realizo correctamente.";
		}
	} else {

				echo "El pago se realizo correctamente.";
	}
}

?>
<?php
require_once ('mercadopago.php');

$mp = new MP('3564165724970805', 'AmfRspIMgxTJHM2cYRI9VxCEOi0xgxHP');
$mp->sandbox_mode(TRUE);$preference_data = array(
	"items" => array(
		array(
			"title" =>"FacturaUp",
			"description" => "Emita su factura de forma facil y sensilla",
			"quantity" => 1,
			"picture_url" => "https://www.mercadopago.com/org-img/MP3/home/logomp3.gif",
			"currency_id" => "ARG", // Available currencies at: https://api.mercadopago.com/currencies
			"unit_price" => 1.00
		)
	)
);



$preference = $mp->create_preference($preference_data);

?>




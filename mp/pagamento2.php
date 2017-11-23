<?php
require_once ('mercadopago.php');

$mp = new MP('1963189080821191', 'HbQ7cf8X7oj9KaK84MNUg6DjvfDsIk6u');
$mp->sandbox_mode(TRUE);
$preference_data = array(
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




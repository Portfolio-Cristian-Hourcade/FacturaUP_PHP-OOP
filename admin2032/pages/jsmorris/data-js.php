<?php 
@$MesActual=date(n);
@$ano="20".date(y);

	include '../../../class/demo.php';
	include '../../../class/conmysql.php';

$NuevoObjeto = new Demos();

if(($MesActual == 1)||($MesActual == 3)||($MesActual == 5)||($MesActual == 7)||($MesActual == 8)||($MesActual == 10)||($MesActual == 12)){
	
	for ($i=1; $i<=31 ; $i++){
		$demo = $NuevoObjeto->SeleccionarFechaDemo($i.'/9/2017');
		$Com = $NuevoObjeto->SeleccionarFechaCom($i.'/9/2017');
		if($i!=31){
			@$resto=$resto."{'period':'Dia ".$i."', 'sale':".$demo.", 'Pago':".$Com."},";
							
		}else{
			@$resto=$resto."{'period':'Dia ".$i."', 'sale':".$demo." , 'Pago':".$Com."}";
		}					
	}
	echo json_encode("[".$resto."]");
}elseif(($MesActual==4) || ($MesActual==6) || ($MesActual==9) || ($MesActual== 11)){
	for ($i=1; $i<=30 ; $i++){
		if($i!=30){
			@$resto=$resto."{'period':'Dia ".$i."', 'sale':20 , 'Pago':70},";
		}else{
			@$resto=$resto."{'period':'Dia ".$i."', 'sale':20 , 'Pago':70}";
		}
	}
	echo json_encode("[".$resto."]");
}elseif($MesActual==2){
	if(($ano % 4 == 0) && ($ano % 100 != 0) || ($ano % 400 == 0)){
		for ($i=1; $i<=29 ; $i++){
			if($i!=29){
				@$resto=$resto."{'period':'Dia ".$i."', 'sale':56 , 'Pago':70},";
			}else{
				@$resto=$resto."{'period':'Dia ".$i."', 'sale':56 , 'Pago':70}";
			}
		}
	echo json_encode("[".$resto."]");
	}else{
		for ($i=1; $i<=28 ; $i++){
			if($i!=28){
				@$resto=$resto."{'period':'Dia ".$i."', 'sale':56 , 'Pago':70},";
			}else{
				@$resto=$resto."{'period':'Dia ".$i."', 'sale':56 , 'Pago':70}";
			}
		}
	echo json_encode("[".$resto."]");
	}
}



	
	
      
?>



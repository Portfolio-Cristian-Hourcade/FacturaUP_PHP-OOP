<?php
class Demos{

	 	public function Alta($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			echo $con->AltaSql($sql);
			$con->CloseConnection();
		}
	
	}
	
?>
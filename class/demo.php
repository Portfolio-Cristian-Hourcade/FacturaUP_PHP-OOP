<?php
class Demos{

	 	public function Alta($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			echo $con->AltaSql($sql);
			$con->CloseConnection();
		}
		public function SeleccionarFechaDemo($fecha){
			$sql="SELECT * FROM demos WHERE d_fecha='".$fecha."'";
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			return $numero_filas;

		}
		public function SeleccionarFechaCom($fecha){
			$sql="SELECT * FROM completos WHERE c_fecha='".$fecha."'";
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			return $numero_filas;

		}
		public function SumarMesDemo($fecha){
			$sql="SELECT * FROM demos WHERE d_fecha LIKE '%".$fecha."'";
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			return $numero_filas;
		}
		public function SumarMesCom($fecha){
			$sql="SELECT * FROM completos WHERE c_fecha LIKE '%".$fecha."'";
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			return $numero_filas;
		}
	}
	
?>
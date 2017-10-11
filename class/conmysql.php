<?php 
class ConnectionMySQL{
	
	private $host;
	private $user;
	private $password;
	private $database;
	private $conn;
	 
	public function __construct(){ 
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'facturaup');
	$this->host=HOST;
	$this->user=USER;
	$this->password=PASSWORD;
	$this->database=DATABASE;
	  
}
  
	public function CreateConnection(){
		$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
	}
	  
	public function CloseConnection(){
		$this->conn->close();
	}
	  
	public function ExecuteQuery($sql){
	 	$result = $this->conn->query($sql);
	 	$fila=mysqli_fetch_assoc($result);
	 	return $fila["adm_id"];
	}
	public function SeleccionarAdmin($sql){
		$result = $this->conn->query($sql);
		return $result;
	}
	public function AltaSql($sql){
		$result = $this->conn->query($sql);
		return $result;
	}
}
?>
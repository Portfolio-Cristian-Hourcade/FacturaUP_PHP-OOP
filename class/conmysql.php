<?php 
class ConnectionMySQL{
	
	private $host;
	private $user;
	private $password;
	private $database;
	private $conn;
	 
	public function __construct(){ 

	include_once("config.php");
	
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

	public function buscar($sql){
	 	$result = $this->conn->query($sql);
	 	if(mysqli_num_rows($result)==0){

			echo 0;
	 	}else{
			echo 1;

	 	}
	}

}
?>
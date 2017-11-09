<?php
class Admin{
		
		public function Login($sql,$User,$Pass){
			echo "probando".$sql.$User.$Pass."";
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			echo $con->ExecuteQuery($sql);
			if($con->ExecuteQuery($sql)==""){
				echo "Error";
			}else{
				$_SESSION["adm_user"]=$User;
				$_SESSION["adm_id"]=$Pass;
			}
			$con->CloseConnection();
		}
		public function Alta($sql,$User,$Pass){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->ExecuteQuery($sql);
			$con->CloseConnection();
		}
		public function Borrar($sel){
			$con = new ConnectionMySQL();
			$seleccion = explode("|",$sel);
			for($x=0;$x<count($seleccion);$x++){
				$sql="UPDATE admin SET adm_status=0 WHERE adm_id=$seleccion[$x]"; 
				$con->CreateConnection();
				$con->SeleccionarAdmin($sql);
			}
			$con->CloseConnection();
		}
		public function ListarAdmin($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$res = $con->SeleccionarAdmin($sql);
			while($fila=mysqli_fetch_assoc($res)){
				?>
					<tr>
						<td><input type="checkbox" class="tilde" value="<?php echo $fila["adm_id"] ?>">
						<td><?php echo $fila["adm_user"]?></td>
					</tr>
				<?php
				}
		}
		public function EditarAdmin($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->SeleccionarAdmin($sql);
			$con->CloseConnection();
		}
	}
	
?>
<?php
class ListarTablas{
	public function ListarAdmin(){
?>
		<tr>
			<td><input type="checkbox" class="tilde" value="<?php echo $fila["adm_id"] ?>">
			<td><?php echo $fila["adm_user"]?></td>
			<td><?php echo $fila["adm_pass"]?></td>
		</tr>
<?php
	}

}
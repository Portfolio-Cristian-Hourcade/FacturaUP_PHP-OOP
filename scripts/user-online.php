<?php
session_start();

if(empty($_SESSION["cl_email"])){
	echo "error";
}else{
	echo "usuario logeado"; 
}

?>
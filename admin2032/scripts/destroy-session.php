<?php

  session_start();
  unset($_SESSION["adm_user"]); 
  unset($_SESSION["adm_id"]);
  session_destroy();

  exit;
  
?>
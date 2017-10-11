<?php

  session_start();
  unset($_SESSION["cl_email"]); 
  unset($_SESSION["cl_pass"]);
  session_destroy();

  exit;
  
?>
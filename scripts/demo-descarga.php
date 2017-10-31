<?php

		header("Content-disposition: attachment; filename=ss.zip");
		header("Content-type: application/zip");
		readfile("ss.zip");
		
?>
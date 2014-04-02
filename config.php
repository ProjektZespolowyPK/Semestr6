<?php
	session_start();
	header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
	header('Pragma: no-cache'); // HTTP 1.0.
	header('Expires: 0'); // Proxies.
	
    $mysql_server = "mysql.hostinger.pl"; 
    $mysql_admin = "u414909721_z02"; 
    $mysql_pass = "z02_13k3"; 
    $mysql_db = "u414909721_z02"; 
    
	mysql_connect($mysql_server, $mysql_admin, $mysql_pass);
	
	if(!mysql_select_db($mysql_db))
	{
		echo "error";
		exit;
	} else
	{
	// echo "OK";
	}
	
	

?>

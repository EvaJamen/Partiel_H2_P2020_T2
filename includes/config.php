<?php

	//CONNECT TO MY BDD

	//Define the BDD and the user
	define('DB_HOST','localhost');
	define('DB_NAME','Partiels_H2_P2020_T2'); 
	define('DB_USER','root');
	define('DB_PASS','root');

	try
	{
    	// Try to connect to database
    	$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
		
		// Set fetch mode to object
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	}

	catch (Exception $e)
	{
    	// Failed to connect
		die('Could not connect');
	}

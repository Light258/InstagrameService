<?php
	
   
	

	define('HOST', 'sql200.epizy.com');
	define('DB_NAME','epiz_32076407_instagrameph');
	define('USER','epiz_32076407');
	define('PASS','PDDrlxogEq28u');
	try{

    	$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME,USER,PASS);

    	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo"connectez";

    	}catch(PDOException $e){
		echo $e;}
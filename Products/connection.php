<?php
	
	define('DB_HOST','localhost');
        define('DB_USER','root');
        define('DB_PASSWORD','');
        define('DB_DATABASE','trilocode');
	
//Connecting to Database
      $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Unable to Connect');
mb_language('uni');  
mb_internal_encoding('UTF-8'); 
?>
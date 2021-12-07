<?php
	
	define('DB_HOST','localhost');
        define('DB_USER','dailynews');
        define('DB_PASSWORD','HACK@ers143');
        define('DB_DATABASE','dailynews');
	
//Connecting to Database
      $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Unable to Connect');
mb_language('uni');  
mb_internal_encoding('UTF-8'); 
?>
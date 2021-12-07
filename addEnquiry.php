<?php

include("connection.php");

	if(isset($_POST['subject']) &&  isset($_POST['name']) && isset($_POST['mobile']) &&isset($_POST['msg']))
	{
	
		$subject = $_POST['subject']; 
		$name = $_POST['name']; 
		$mobile = $_POST['mobile']; 
		$msg = $_POST['msg']; 

		$query1 = "INSERT INTO enquiry(subject,name,mobile,msg) VALUES('$subject','$name','$mobile','$msg')";
		if ($result1 = mysqli_query($con,$query1)) {
	       //echo " Record Added!";
		$user = "sagarbijja";
        $api_key = "13e9c2d7-3624-410f-ab37-c4aaacf09033"; //will get from system
        $baseurl ="http://sms.hspsms.com";
        $msg="Your enquiry has been successfully submited. Our Marketing Team will get in touch with you soon! Trilocode Technology";
        $message = urlencode($msg);
        $sender = "TRILOC";
		$url = "$baseurl/sendSMS?username=$user&message=$message&sendername=$sender&smstype=TRANS&numbers=$mobile&apikey=$api_key";
	    $ret = file_get_contents($url);
	    
	    //mail send code....
	    $to = "trilocode.info@gmail.com";
    
         $message = "Enquiry from website for : ".$subject;
         $header = $_POST['name']."\r\n";
	     $header .= $_POST['mobile']."\r\n";
         $header .= "trilocode.info@gmail.com";
    
      
         $retval = mail ($to,$subject,$message,$header);
	    }
		else{
			 exit(mysqli_error($con));
	    
		}
		
	}
	
?>
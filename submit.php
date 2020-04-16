<!--
Aphid v1.0 (https://www.luispineda.com/aphid)
Copyright (c) 2020 Luis Pineda Rebolledo
Licensed under MIT (https://github.com/luispinedare/aphid/blob/master/LICENSE)
-->
<?php

	// Validate name
    	if(empty(trim($_POST['name']))){
        	$name_err = "$not_name<br>";     
    	}else{
        	$name = trim($_POST['name']);
	}
	
	// Validate email
    	if(empty(trim($_POST['email']))){
        	$email_err = "$not_mail<br>"; 
    } 
	
	//Validate email format	 
		elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    		$email_err = "$not_valid_mail<br>";
	}else{
		$email = trim($_POST['email']);
   	}
	
	// Validate contact form
    	if(empty(trim($_POST['message']))){
        	$contact_err = "$not_message<br>";     
    	}else{
        	$contact = trim($_POST['message']);
	}
	
	// Check input errors before sending form
    if(empty($name_err) && empty($email_err) && empty($contact_err)){


			//** get data
			
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
                    
                }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                
                } else {
                $ip = $_SERVER['REMOTE_ADDR'];
                }
                
                $unixtime = $_SERVER['REQUEST_TIME'];
                $time = date('d/m/Y H:i:s ', $unixtime);    
                
            //**Send Mail**//
                $to      = $CONTACT_EMAIL; // Send email to our user
                $subject = $mail_subject; // Give the email a subject 
                $message = 
'
                
Name: '.$_POST['name'].'
    
Email: '.$_POST['email'].'
    
IP: '.$ip.'
    
Date: '.$time.' (UTC)
    
---------------------------
Message: '.$_POST['message'].'
    
';
     
    ; // Our message above including the link
                                         
    $headers = 	'From: '.$TITLE.' <noreplay@'.$DOMAIN.'>' . "\r\n" .
                'X-Mailer: PHP/' . phpversion(); // Set from headers
     
    $from = '-f noreplay@'.$DOMAIN;            
    
    mail($to, $subject, $message, $headers, $from);	// Send mail
          
      {
        // Send mail OK - Show a nice thank you page or something
              $resp_contact = "$sent_mail<br>";
              
              }
          
    }
    
  echo "<p class='small text-danger'>$name_err</p>";
  echo "<p class='small text-danger'>$email_err</p>";
  echo "<p class='small text-danger'>$contact_err</p>";
  echo "<p class='small text-success'>$resp_contact</p>";
  
?>
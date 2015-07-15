<?php
	require_once 'mailchimp/MCAPI.class.php';
	require_once 'config.php'; 
	
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$message = $_REQUEST['message'];
	$phone = $_REQUEST['phone'];
	
	if($mode == 'mailchimp') {
	
		$user_email = $from; 
		
		$api = new MCAPI($apikey);
		
		$merge_vars = array('FNAME'=>$name,'MESSAGE'=>$message,'PHONE'=>$phone);
		
		// By default this sends a confirmation email - you will not see new members
		// until the link contained in it is clicked!
		$retval = $api->listSubscribe( $listId, $user_email, $merge_vars );
		
		if ($api->errorCode){
			echo "Unable to load listSubscribe()!\n";
			echo "\tCode=".$api->errorCode."\n";
			echo "\tMsg=".$api->errorMessage."\n";
		} 
		
	}
	
	if($mode == 'email') {
	
		// Configuration 
		$to = $adminemail; // Your email address.  
		$subject = "New message via the Conversion landing page"; // Email subject line 
		$headers = "From: $from";
		$fields = array();
		$fields{"name"} = "Name";
		$fields{"email"} = "Email";
		$fields{"phone"} = "Phone";
		$fields{"message"} = "Message";
		$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
		$send = mail($to, $subject, $body, $headers);
	
	}	
?>

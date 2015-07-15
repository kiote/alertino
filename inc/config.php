<?php
/*-----------------------------------------------------------------------------------*/
/*	
/*	Select Mode
/*	
/*	Choose 'email' to send yourself an mail with the subscribers details, or specify 'mailchip' to save subsribers to a mailchimp list.
/*	Example: $mode = 'mailchimp';
/*	Example: $mode = 'email';
/*
/*-----------------------------------------------------------------------------------*/

	$mode = 'email';

/*-----------------------------------------------------------------------------------*/
/*	
/*	Settings for: Administrator Email Mode
/*	
/*	Example: $adminemail = "you@youremail.com";
/*
/*-----------------------------------------------------------------------------------*/

	$adminemail = "youremail@example.com";

/*-----------------------------------------------------------------------------------*/
/*	
/*	Settings for: Mailchimp Mode
/*	
/*	Example: $adminemail = "you@youremail.com";
/*
/*-----------------------------------------------------------------------------------*/

    // API Key - see http://admin.mailchimp.com/account/api
    // Example: $apikey = '731c311dc6c65777hud78dghe7c248e20d-us9'; 
    
    $apikey = '';
    
    // A List Id to add subscribers to. 
    // To determin the List ID, login to you MailChimp account, go to List, click on the list title. Select the Settings menu and choose 'List name & default' from the drop down menu. The List ID will be presented on the top right of the page.
    // Example: $listId = '21a0sadd1';
    
    $listId = ''; 

    //just used in xml-rpc examples
    
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>

<?php

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Vyplnte požadované údaje!";
	return false;
   }

$name          = $_POST['name'];
$email_address = $_POST['email'];
$phone         = $_POST['phone'];
$message       = $_POST['message'];

/**
 * *************************************************************************************************
 * This is where the form will send a message to.
 * *************************************************************************************************
 */

// Add your email address inbetween the '' replacing info@yourwebsite.com
$to = 'riaditel@seniorgarden.sk';

/**
 * *************************************************************************************************
 * Create the email and send the message
 * *************************************************************************************************
 */

$email_subject = "Nova sprava z webovej stranky SeniorGarden.sk od:  $name";

$email_body = "Sprava z kontaktneho formulara www.seniorgarden.sk.\n\n"."Tu je text spravy:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

// This is the email address the generated message will be from. We recommend using something like noreply@yourwebsite.com.
$headers = "From: seniorgarden.sk@gmail.com\n";
$headers .= "Reply-To: $email_address";

// send the message
mail($to,$email_subject,$email_body,$headers);

return true;


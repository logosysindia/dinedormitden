<?php 
	$emailTo = 'info@dinedormitden.com';
	if($subject!=""){
	$subject =$_REQUEST['subject'];
	}else{
	$subject = 'Dine Contact Form';
	}
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$msg=$_REQUEST['msg'];
	
	$body = "Name: $name \n\nEmail: $email \n\nmobile: $mobile \n\nMessage: $msg";
	$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
	
	mail($emailTo, $subject, $body, $headers);
?>
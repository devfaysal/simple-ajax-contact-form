<?php
header("Access-Control-Allow-Origin: *");
if($_SERVER['REQUEST_METHOD'] == 'post'){
date_default_timezone_set("Asia/Dhaka"); 
$dateTime = date("Y-m-d-h-i-s-A");
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//Set Your Email address in which you want to receive the email from contact form
$tomail="faysal@webpers.com";

		//======== for sending email========
		$to = $tomail;
		$subject = "Website Contact Form";
		$msg = "
		<html>
		<head>
		<title>HTML email</title>
		<style type='text/css'>
		body{ font-family: Verdana,Geneva,Tahoma,Arial,Helvetica,sans-serif; font-size: 14px;}
		</style>
		</head>
		<body>
		Time: $dateTime <br>
		Name: $name <br>
                Phone: $phone <br>
                Email: $email <br>
                Feedback: $message
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: ' .$email. "\r\n";
		// $headers .= 'Cc: myboss@example.com' . "\r\n";

		if(mail($to,$subject,$msg,$headers)){
		//======== for sending email========
            echo 'Message sent successfully';
        }
}
<?php
$to = "khandesh@iitk.ac.in";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "khandeshb1@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$message = $_REQUEST["message"];
$uploadcv = $_REQUEST["uploadcv"];



$to = 'sheelacharitablefoundation20@gmail.com';
$subject = "Sheela Charitable Foundation";
$message =  " 
Name: $name
Email: $email
phone: $phone
message: $message
uploadcv: $uploadcv
"
;
mail( $to, $subject, $message);
header("Location: thanks.php");
?>
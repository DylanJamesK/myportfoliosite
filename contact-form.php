<?php

$name = $_POST['name'];
$email = $_POST['email'];
$purpose = $_POST['purpose'];
$message = $_POST['message'];
$to = "dyljameskerr@gmail.com";
$subject = "New Message from Portfolio Website- Purpose: ".$purpose;

$headers = "From: ".$name. "\r\n";

$txt = "You have recieved an email from ".$name. "\r\nEmail: ".$email ."\r\nMessage: ". $message;

if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}
#Here is where you are linked to after clicking the submit button
header('Location:thankyou.html');

?>
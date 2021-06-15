<?php
// Submit the Form 
$userName= $_POST['name'];
$userLast= $_POST['lastname'];
$userEmail= $_POST['email'];
$userCompany= $_POST['company'];
$userPhone= $_POST['phone'];
$userSelected= $_POST['select'];
$message= $_POST['message'];

$to = "orders@fortinet.ge"
$body = "";

$body .= "From: ".$userName. .$userLast "\r\n";
$body .="Email: ".$userEmail. "\r\n";
$body .="Company: ".$userCompany. "\r\n";
$body .="Phone: ".$userPhone. "\r\n";
$body .="Selected: ".$userSelected. "\r\n";
$body .="message: ".$message. "\r\n";

mail($to,$body);
    $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
     header("Location: index.html");
   ?>
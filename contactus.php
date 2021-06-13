<?php 
    $name = $_POST ['name'];
    $lastname = $_POST ['lastname'];
    $visitor_email = $_POST['mail'];
    $phone = $_POST['message'];
    $company = $_POST['companyname'];
    $message = $_POST['message'];


    $email_from = 'order@fortinet.ge';
    $email_subject = 'New Form Submission';
    $email_body = "User Name:$name.\n".
                        "User Last Name:$lastname.\n".
                            "User Number:$phone.\n".
                                "User Company Name:$company.\n".
                                    "User Email:$visitor_email.\n".
                                            "User Message:$message.\n";


    $to = "contact@ittech.ge";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");

?>
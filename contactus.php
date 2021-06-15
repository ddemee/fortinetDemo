<?php
      if(null!==($_POST["name"])) {
          $name = $_POST["name"];
         /* echo "Please enter 'Name'<br />"; */
      } else {
          $name = "";
      }
      if(null!==($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
       /* echo "Please enter 'Name'<br />"; */
    } else {
        $lastname = "";
    }
      if(null!==($_POST["mail"])) {
          $email = $_POST["mail"];
          /* echo "Please enter 'E_Mail'<br />"; */
      } else {
          $email = "";
      }
      if(null!==($_POST["company"])) {
        $company = $_POST["company"];
        /* echo "Please enter 'E_Mail'<br />"; */
    } else {
        $company = "";
    }
    if(null!==($_POST["phone"])) {
        $mobile = $_POST["phone"];
        /* echo "Please enter 'E_Mail'<br />"; */
    } else {
        $mobile = "";
    }
    if(null!==($_POST["message"])) {
        $message = $_POST["message"];
        /* echo "Please enter your message<br />"; */
    }   else {
        $message = "";
    }
    /*echo "{$name}, {$email}, {$message}";*/

  $email_subject = "New Form submission";

  $email_body = "You have received a new message from the user $name.\n".
                "Here is the message:\n $lastname";
                "Here is the email:\n $email";
                "Here is the company:\n $company";
                "Here is the phone:\n $phone";
                "Here is the message:\n $message";


  $to = "order@fortinet.ge";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
    header("Location: index.html");
   ?>
<?php
//  Message Vars 
$msg = '';
$msgClass = ' ';


if(filter_has_var(INPUT_POST,'submit')){
    // Gett Form Dataa
    $name=htmlspecialchars ($_POST['name']);
    $email= htmlspecialchars ($_POST['email']);
    $message= htmlspecialchars ($_POST['message']);

    // Chek Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
        // passed
        // Check Email
        if(filter_var($email, FILTER_VALIDET_EMAIL) === false ){
            // Failed
            $msg =' Please Use a valide email';
            $msgClass='alert-danger';
        }else {network-p
            // Passed
            // Recipient Email
            $to = 'orders@fortinet.ge';
            $subject = 'Concact Request From'.$name;
            $body = '<h2>Contact Reques</h2>
            <h4>Name</h4><p>'.$name.'</p>;
            <h4>Email</h4><p>'.$email.'</p>;
            <h4>Message</h4><p>'.$message.'</p>';

            //  Email Headers
            $headers ="MIME-Version: 1.0" ."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            // Additional Headers 
            $headers .= "From:" .$name."<" .$email.">"."\r\n";
            
            if(mail($to,$subject,$body,$headers)){
                // Email Sent 
                $msg ='Your Email Has Been Sent';
                $msgClass='alert-success';
            }else {
                // Failed 
                $msg =' Your Email not Sent';
                $msgClass='alert-danger';

            }
        }
    }else {
        // Failed
        $msg =' Please Fill in All Fields';
        $msgClass='alert-danger';
    }
}
 ?>

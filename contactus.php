
<?php
if(isset($_POST['submit'])){
    $mailto = "orders@fortinet.ge";  
    $from = $_POST['email'];
    $name = $_POST['name'];
    $lastname =$_POST['lastname'];
    $company =$_POST['company'];
    $mobile=$_POST['phone'];
    $selected = $_POST['select'];
    $message = $_POST['message'];
    $subject2 = "Your Message Submitted Successfully | Deme Development";
    $message2 = "clien Name:". $name. "Wrote Following message". "\n\n".$_POST['message'];
    $message3 = "Dear:".$name. "\n\n". "Thank You for contactin us! We'll Get bacl to you Shortly";
    $headers = "From:". $from;
    $headers2 = "From:".$mailto;
    $result = mail($mailto,$company,$mobile,$selected,$message,$headers);
    $result2 = mail($from,$subject2,$message3,$headers2);
    if($result){
        echo '<script type="text/javascript">alert("Message Sent. Thank you! We will contact you shortly.")';
    } else{
        echo '<script type="text/javascript">alert("Submission Failed! Try again Later.")';
    }

}
 ?>

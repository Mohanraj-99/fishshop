<?php
if (isset($_POST['submit'])){
  $name = $_POST['firstname'];
  $num = $_POST['number'];
  $email_from = $_POST['email'];
  $message = $_POST['message'];
  $visitor_email = "glmohan2016@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "To: $visitor_email \r\n";
  
  $email_subject = "A Fish Customer mail";


   $email_body = "You have received a new message from the user ".$name."\n".
   "Here is the message:\n". $message

   mail($visitor_email,$email_subject,$email_body,$headers);
    }
else{
    
}
?>
<?php

$to = 'vijayachandrika@vaahosttech.com';
$subject = 'Contact Mail';

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['message'];


$message = 'NAME:'.$name. "\r\n". 'E-MAIL:'.$email. "\r\n". 'MESSAGE'.$comments. "\r\n";

$headers = 'From:'.$email. "\r\n" .
            'Reply-To:'.$email. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

$email_sender = @mail($to,$subject,$message,$headers);
if($email_sender){
   echo '<div class="alert alert-success" role="alert">Mail Send Successfully</div>';
}else{
   echo '<div class="alert alert-danger" role="alert">Sending Failed</div>';
}

?>
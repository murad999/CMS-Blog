<?php

$to = 'vijayachandrika@vaahosttech.com';
$subject = 'Book Appoinment';

if(isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    $email = "";
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['dateTo'];
$doctor = $_POST['doctors'];
$department = $_POST['departments'];

$message = 'NAME:'.$name. "\r\n" . 'CONATACT NUMBER:'.$phone. "\r\n" . 'E-MAIL:'.$email. "\r\n" . 'DATE:'.$date. "\r\n" . 'DOCTOR NAME:'.$doctor. "\r\n" .                      'DEPARTMENT'.$department. "\r\n";

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
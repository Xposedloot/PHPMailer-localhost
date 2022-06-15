<?php
use PHPMailer\PHPMailer\PHPMailer;

require('vendor\Exception.php');
require('vendor\SMTP.php');
require('vendor\PHPMailer.php');

try {
    $mail = new PHPMailer; 
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true));                        
    $mail->isSMTP();                              
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;    
    $mail->Username   =  'ravikumarzestgeek@gmail.com';                       
    $mail->Password   = 'lobchmmozsqmfnev'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              
    $mail->Port       = 587;     
    $mail->setFrom('ravikumarzestgeek@gmail.com', 'zestgeek');
    $mail->addAddress('ravikumarzestgeek@gmail.com');
    $mail->addReplyTo('ravikumarzestgeek@gmail.com', 'Information');
    $mail->isHTML(true);                                  
    $mail->Subject = 'This is testing Xposedloot';
    $mail->Body    = 'This is the HTML message body <b>Xposedloot!</b>';

    $mail->send();
    //echo "<pre>"; print_r($mail);
    echo 'Message has been sent';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




 
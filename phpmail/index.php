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
    $mail->Username   =  'ravik4591@gmail.com';                       
    $mail->Password   = '***************';  // Go to the Gmail >> Profile >> "Manage your Google Account" >> Security >> 2-Step Verification == "ON" and App passwords ==> { Select app == "Mail" & Select device == "Windows Computer" } >> Click on the "Generate" Copy and paste here Password    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              
    $mail->Port       = 587;     
    $mail->setFrom('ravik4591@gmail.com', 'Xposedloot');
    $mail->addAddress('ravik4591@gmail.com');
    $mail->addReplyTo('ravik4591@gmail.com', 'Information');
    $mail->isHTML(true);                                  
    $mail->Subject = 'This is testing Xposedloot';
    $mail->Body    = 'This is the HTML message body <b>Xposedloot!</b>';

    $mail->send();
    //echo "<pre>"; print_r($mail);
    echo 'Message has been sent';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




 

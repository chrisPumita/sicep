<?php

//include "../../config/APP.php";
//echo SERVER;

//Load Composer's autoloader
require '../../vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviarCorreoPrueba(){
    $to = 'christian.floppy@gmail.com';
    $asunto = "PRUEBA DE CORREO";
    $htmlBody = '<h1>CORREO ENVIADO DE SICEP</h1>';
    $mail = objeMail($to,$asunto,$htmlBody);
    return sendMail($mail);
}


function objeMail($to,$asunto,$htmlBody){
    include_once "../../config/SERVER.php";
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = HOST;                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = USERNAME_MAIL;                     //SMTP username
    $mail->Password = PW_MAIL;                              //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = PORT_MAIL;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom( USERNAME_MAIL,NAME_MAIL);
    $mail->addAddress($to);               //Name is optional

    //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body = $htmlBody;
    return $mail;
}

function sendMail($mail){
    try {
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Error al enviar el correo<br>: {$mail->ErrorInfo}";
        return false;
    }
}


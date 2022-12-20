<?php 

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";
require "phpmailer/src/Exception.php";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //SMTP::DEBUG_OFF;
    $mail->isSMTP();                                            
    $mail->Host       = 'tremendooz29@gmail.com';                     
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'tremendooz29@gmail.com';                  
    $mail->Password   = 'latoso2983';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tremendooz29@gmail.com', 'Nails Room');
    $mail->addAddress('tremendooz29@gmail.com', 'Joe User');    
    $mail->addReplyTo('tremendooz29@gmail.com', 'Information');

    //Enviar contenido
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Cita';

    $cuerpo = "<h1>Gracias por agendar tu cita</h1>";
    $cuerpo .= "<p>El id de su cita es <B>".$idTransacion ."</b></p>";

    $mail->Body    = utf8_encode($cuerpo);
    $mail->AltBody = 'Le enviamos los detalles de su compra';

    $mail->setLanguage("es" , "../phpmailer/language/phpmailer.lang-es.php");

    $mail->send();
} catch (Exception $e) {
    echo "Error al enviar el comprobante, no de la compra: {$mail->ErrorInfo}";
}
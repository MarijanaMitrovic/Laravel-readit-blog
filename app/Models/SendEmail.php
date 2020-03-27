<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 27.3.2020.
 * Time: 16.26
 */

namespace App\Models;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require 'phpmailer\phpmailer\src\Exception';
//require 'phpmailer\phpmailer\src\PHPMailer';
//require 'phpmailer\phpmailer\src\SMTP';


class SendEmail
{


 public function ContactAdmin ($email,$name,$message){
        $mail = new PHPMailer ( true );
     try {

$mail -> isSMTP ();
$mail -> Host = 'smtp.gmail.com' ;

$mail -> SMTPAuth = true ;
$mail -> Username = 'UKLONJENO'; // SMTP username
$mail -> Password = 'UKLONJENO' ; // SMTP password
$mail -> SMTPSecure = 'tls' ;
$mail -> Port = 587 ;
$mail -> setFrom ( 'UKLONJENO' , 'ReadIt blog' );
$mail -> addAddress ( '' , "Contact page" ); // Add a recipient
//Content
$mail -> isHTML ( true );
$mail -> Subject = 'New message - from ReadIt blog';
$mail -> Body = $name . " (e-mail: " . $email . ") sent you a
message:<br/>" . $message ;
$mail -> send ();
} catch ( Exception $e ) {
    echo 'Message could not be sent. Mailer Error: ' , $mail -> ErrorInfo ;
}
}
}
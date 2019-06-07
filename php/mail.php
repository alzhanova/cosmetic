<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ('../PHPMailer/src/Exception.php');
require ('../PHPMailer/src/PHPMailer.php');
require ('../PHPMailer/src/SMTP.php');

$mail = new PHPMailer(true); 
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_msg'];

    $mail->isSMTP();
    $mail->Host = 'smtp.mail.ru';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lllelouch1997@mail.ru';                 // SMTP username
    $mail->Password = 'alzhanova1997';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('lllelouch1997@mail.ru');
    $mail->addAddress('dana_10_97@mail.ru');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Заявка с сайта';
    $mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone . ' его сообщение: ' .$message;
    $mail->AltBody = '';

    if(!$mail->send()){
        echo 'Заявка не отправлена. Попробуйте еще раз', $mail->ErrorInfo ;
    }
    else {
       header('location: ../thank-you.html');
}
?>
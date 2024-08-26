<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $useremail = $_POST['email'];
    $username = $_POST['name'];
    $useraddress = $_POST['address'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mail = new PHPMailer(true);


    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mda00400@gmail.com';
        $mail->Password   = 'nybzbuhqrexalwit';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;


        $mail->setFrom('mda00400@gmail.com', 'from company');
        $mail->addAddress($useremail, $username);
        echo 'Message has been sent';

        $mail->isHTML(true);
        $mail->Subject = 'Thank you for contacting us';
        $mail->Body    = 'Dear ' . htmlspecialchars($username) . ',<br><br>Thank you for getting in touch with us. We have received your message and will respond to you shortly.<br><br>Best regards,<br>Mohd Anas';

        $mail->send();






        $mail->clearAddresses();

        $mail->addAddress('mda00400@gmail.com', 'Mohd Anas');
        $mail->Subject = 'New Form Submission';
        $mail->Body    = 'New form submission details:<br><br>' .
            'Name: ' . htmlspecialchars($username) . '<br>' .
            'Email: ' . htmlspecialchars($useremail) . '<br>' .
            'Subject: ' . htmlspecialchars($subject) . '<br>' .
            'Message: ' . nl2br(htmlspecialchars($message)) . '<br>' .
            'Address: ' . htmlspecialchars($useraddress) . '<br>';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location:index.php");
    }
    exit();
}

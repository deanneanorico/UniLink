<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';
include 'db.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()) {
    header('location: ./forgot-password.php?invalid=email');
    exit();
}

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cai590901@gmail.com';                     //SMTP username
    $mail->Password   = 'inlmyfypkhtekygk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cai590901@gmail.com', 'UniLink');
    $mail->addAddress($email);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Forgot Password';
    $mail->Body    = 'This is the link to enter your new password.<br><a href="http://localhost/UniLink/new_password.php">Link</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    session_start();
    $_SESSION['emailRecovery'] = $email;
    header('location: ./email.sent.success.php');
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// This is the link to enter your new password. (link sa baba)
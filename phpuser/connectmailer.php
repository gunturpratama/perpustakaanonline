<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// PeRpusBergerak123$ password email
// email perpusbergerak@gmail.com



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../phpmailer/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'perpusbergerak@gmail.com';                 // SMTP username
    $mail->Password = 'PeRpusBergerak123$';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('pengabdixketan@gmail.com', 'Guntur Admin');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hello Admin!';
    $mail->Body    = $message;
    $mail->AltBody = $name;

    $mail->send();
    echo '<script> 
    alert("Email Anda Berhasil Terkirim !");
    window,location = "../user/about.php"
    </script>';
} catch (Exception $e) {
    echo '<script> 
    alert("Email Anda gagal terkirim !");
    window,location = "../user/about.php"
    </script>', $mail->ErrorInfo;
}
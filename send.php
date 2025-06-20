<?php 

use PHPMailer\PHPmailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; // Include the PHPMailer library
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) { 
    $mail = new PHPMailer(true); // Create a new PHPMailer instance
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication

    // SMTP username and password
    $mail->Username = 'emailerkal@gmail.com';
    $mail->Password = 'xagzqmdtnqgbdatg'; // SMTP username and password
    $mail->SMTPSecure ='ssl';
    $mail->Port = 465; 

    $mail->setFrom('emailerkal@gmail.com');
    $mail->addAddress("karlniroshrestha@gmail.com"); // Add a recipient

    $mail->isHTML(true); // Set email format to HTML

    // Set the subject and body of the email
    $mail->Subject = $_POST["item"]. ' FOUND!';
    $mail->Body = '
    <div style="font-family: Arial, sans-serif; color: #222;">
        <h2 style="color:rgb(226, 74, 74); margin-bottom: 10px;">' . htmlspecialchars($_POST["item"]) . '</h2>
        <p style= color: rgb(0,0,0); "margin: 0 0 8px 0;"><strong>Place where it was found: </strong> ' . htmlspecialchars($_POST["place"]) . '</p>
        <p style="margin: 0 0 8px 0;"><strong>Date & time where it was found: </strong> ' . htmlspecialchars($_POST["datetime"]) . '</p>
        <h2> Found by '. htmlspecialchars($_POST["finder"]). ", ". htmlspecialchars($_POST["email"]) . '</h2>
    </div>';

    $mail->send();

echo 
"
<script>
    alert('Mail Sent Successfully');
    document.location.href='index.php';
</script>
";
}
?>
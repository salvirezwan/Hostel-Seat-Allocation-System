<?php

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

// Validate and sanitize user inputs
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email_id'];
$password = $_POST['password']; // Hash the password
$confirm_password = $_POST['confirm_password'];

if ($password == $confirm_password) {
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $verificationCode = md5(uniqid(rand(), true));

        // Insert user data into the database
        $stmt = $conn->prepare("INSERT INTO `new`(`firstname`, `lastname`, `email`, `password`, `verification_code`, `verified`) VALUES (?, ?, ?, ?, ?, 0)");
        $stmt->bind_param("sssss", $firstName, $lastName, $email, $hashedPassword, $verificationCode);

        if ($stmt->execute()) {
        
        $mail = new PHPMailer(true);
        try{

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'username'; // Put username
        $mail->Password = 'password'; // Put password
        $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' based on your SMTP settings
        $mail->Port = xxx; // Use the appropriate port

        $mail->setFrom('username', 'abcd');
        $to=$email;
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = 'Account Verification';
        $mail->Body = "Please click the following link to verify your email:
            <a href='http://localhost/hsotel3/verify.php?email=$email&code=$verificationCode'>Verify</a>";

        
        if ($mail->send()) {
            
            header("location: signSuccess.php");
        } else {
            echo "Registration successful, but failed to send the verification email. Error: " . $mail->ErrorInfo;
        }
        }
        catch (Exception $e)
        {
            echo "Email sending failed: " . $e->getMessage();
        }

        
            $stmt->close();
            $conn->close();
        }
        }
}
else {
    echo "Passwords don't match"; 
    header("Location: signinFailed.php");
}

?>
<?php
require 'phpmailer/PHPMailerAutoload.php';
require 'db.php';
session_start();

if(isset($_POST['password-reset'])){ //sends an email

  $email = $_POST['email'];
  $sql = $mysqli->query("SELECT * FROM users WHERE email='$email'");
  $row = mysqli_fetch_array($sql);

  $password = $row['password'];


  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='rodib2b@gmail.com';
  $mail->Password='20037067';
  $mail->setFrom('rodib2b@gmail.com','P2P website');
  $mail->addAddress($email);
  $mail->addReplyTo('rodib2b@gmail.com');
  $mail->isHTML(true);
  $mail->Subject='Password Reminder';
  $mail->Body = 'Hi, '.$email.'. <br>Your password is: <br>'.$password; //email body with the users password

  header('location:success.php');
  $_SESSION['message'] = "You will get a password reminder if the email is registered!"; // message to say that the request was received



    if(!$mail->send()){ //if the email cant send, it gives an error
    $_SESSION['message']='Failed to send email, invalid email address!';
    $mysqli->query( "DELETE FROM users WHERE email='$email'");
    header('location:error.php');
  }





}

 ?>

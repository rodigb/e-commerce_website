<?php
require 'phpmailer/PHPMailerAutoload.php';
require 'db.php';
session_start();

if(isset($_POST['contact-submit'])){//contact phpmailer setup
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['topic'];
  $message = $_POST['desc1'];

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='rodib2b@gmail.com';
  $mail->Password='20037067';
  $mail->setFrom('rodib2b@gmail.com','Rodi');
  $mail->addAddress('rodib2b@gmail.com');
  $mail->addReplyTo('rodib2b@gmail.com');
  $mail->isHTML(true);
  $mail->Subject='Inquiry from: '.$_POST['name'];
  $mail->Body = "Name: ".$_POST['name']."<br>Email: ".$_POST['email']."<br>Subject: ".$_POST['topic']."<br>Message: ".$_POST['desc1']; //website email send email toself with information in it
  header('location:success.php');
  $_SESSION['message'] = "Thank you for your email, we will aim to respond soon!";

        if(!$mail->send()){//if it cant send, the email was wrong
    $_SESSION['message']='Failed to send email, invalid email address!';
    $mysqli->query( "DELETE FROM users WHERE email='$email'");
    echo "noooo1";
  }





}

 ?>

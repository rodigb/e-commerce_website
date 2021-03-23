<?php

require 'phpmailer/PHPMailerAutoload.php';

$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['password'] = $_POST['password'];


$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string($_POST['password']);
$username = $mysqli->escape_string($_POST['username']);


$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
$resultu = $mysqli->query("SELECT * FROM users WHERE username ='$username'")or die ($mysqli->error()); //query to select from users where the email and username are matching




if ( $result->num_rows > 0){// if a row is found it gives the error email is taken

  $_SESSION['message'] = 'Email taken!';
  header("location:error.php");

}
elseif ($resultu->num_rows > 0) {//if a row is found it gives the error that the username is taken
  $_SESSION['message'] = 'Username taken!';
  header("location:error.php");
}


else { //else it inputs the results into the database
  $sql = "INSERT INTO users (first_name,last_name,email,password,username)"
  . "VALUES('$first_name', '$last_name', '$email', '$password', '$username')";



  if ($mysqli -> query($sql)){ //sends confirmation mail
    $_SESSION['active'] = 0;
    $_SESSION['logged_in'] = true;
    $_SESSION['message'] = "Confirmation link sent to $email, please verify";

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='rodib2b@gmail.com';
    $mail->Password='20037067';
    $mail->setFrom('rodib2b@gmail.com','Rodi');
    $mail->addAddress($email);
    $mail->addReplyTo('rodib2b@gmail.com');
    $mail->isHTML(true);
    $mail->Subject='Account Verification';
    $mail->Body = 'thank you for signing up Please click on the link to verify: http://localhost/fyp2/verify.php?email='.$email;

      if(!$mail->send()){ //if the email cant be sent it will give this error
  $_SESSION['message']='Failed to send email, invalid email address!';
  $mysqli->query( "DELETE FROM users WHERE email='$email'");
  header("location:error.php");
}

else{

      header("location:success.php");
    }
  }

  else{
    $_SESSION['message']= 'Registration failed'; //if anything else happens, it gives an error
    header("location:error.php");
  }

}


 ?>

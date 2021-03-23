<?php

require 'db.php';
session_start();


if(isset($_GET['email']) && !empty($_GET['email'])){

  $email = $mysqli->escape_string($_GET['email']);
  $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND active='0'");

  if($result->num_rows == 0){
    $_SESSION['message'] = "Account already verified";
    header("location: error.php");

  }

  else{

    $_SESSION['message']="Account activated! Welcome, $email";
    $mysqli->query("UPDATE users SET active='1' WHERE email = '$email'") or die($mysqli->error);
    $_SESSION['active']=1;


    header("location: success.php");
  }
}

 ?>

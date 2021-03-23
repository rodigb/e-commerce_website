<?php
require 'db.php';
session_start(); //session starts
$sender = $_SESSION['username'];
$receiver = $mysqli->escape_string($_POST['username']);
$subject = $mysqli->escape_string($_POST['subject']);
$message = $mysqli->escape_string($_POST['message']);
$date = date("y/m/d H:i:s"); //provides the date the message was sent



$viewmsg = $mysqli->query("SELECT * FROM privatemessages WHERE to_user='$sender'");

$result = $mysqli->query("SELECT * FROM users WHERE username='$receiver'");

if($result ->num_rows==0){ //checks to see if the username entered to message exists
  $_SESSION['message']="The username you have entered doesnt exist.";
  header("location:error.php");
}

else{

  $mysqli->query("INSERT INTO privatemessages (from_user,to_user,subject,message,msgdate)"//inserts the message data into the database table
  . "VALUES('$sender', '$receiver', '$subject', '$message', '$date')") or die($mysqli->error());
  $_SESSION['message']="Message sent successfully!";
  header("location:success.php");
}


 ?>

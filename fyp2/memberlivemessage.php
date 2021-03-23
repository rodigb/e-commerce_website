<?php
require 'db.php';
session_start();
$sender = $_SESSION['username'];
$receiver = $mysqli->escape_string($_SESSION['username']);

$message = $mysqli->escape_string($_POST['livechatmessage']);
$date = date("y/m/d H:i:s");

$viewmsg = $mysqli->query("SELECT * FROM livechat"); // selects all rows from livechat database table

  $mysqli->query("INSERT INTO livechat (username,live_message,msgtime)" //inserts all message values into the database
  . "VALUES('$sender', '$message', '$date')") or die($mysqli->error());

  header("location:membershome.php");



 ?>

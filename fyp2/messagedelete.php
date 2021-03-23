<?php
require 'db.php';
session_start();

if(isset($_GET['ID'])){

  $ID = $mysqli->escape_string($_GET['ID']);


  $sql= $mysqli->query("DELETE FROM privatemessages WHERE id='$ID'"); // deletes the whole message by looking at the id



  header('location:messageinbox.php');




}
else{
  echo "message doesnt exist?"; //if it cant delete, there may be a problem where the message doesnt exist (any other results produce errors)
}



?>

<?php

require 'db.php';
session_start();


$email = $_SESSION['email'];
$email1 = $mysqli->escape_string($_POST['email']);
$bio = $mysqli->escape_string($_POST['bio']);
$name = $mysqli->escape_string($_POST['nameedit']);
$surname = $mysqli->escape_string($_POST['surnameedit']);

if (isset($_POST['upload'])){


if($email == $email1){

    $target= "images/".basename($_FILES['image']['name']);
    $imageName= $mysqli->escape_string($_FILES["image"]["name"]);
    $imageType= $mysqli->escape_string($_FILES["image"]["type"]);


    if(substr($imageType,0,5)=="image"){
      echo "working";

      $mysqli->query("UPDATE users SET profileimg='$imageName' WHERE email = '$email'")or die($mysqli->error);
      $_SESSION['profile_image'] = $imageName;

      $_SESSION['message'] = "Successfully uploaded image!";


      if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $_SESSION['message'] = "Successfully uploaded image!";
        header("location:success.php");
        }

        else{
        $_SESSION['message'] = "upload failed";
        header("location:error.php");
          }

        }

        else{

          $_SESSION['message'] = "file was not in image format";

          }
        }
}

 ?>

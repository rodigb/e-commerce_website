<?php

$email = $mysqli->escape_string($_POST['email1']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'"); // Query to find the input email in the database

if($result ->num_rows==0){ // if the email row is == 0, it means the row cant be found and it doesnt exist.
  $_SESSION['message']="The email you have entered doesnt exist.";
  header("location:error.php");
}
else{
  $user = $result->fetch_assoc();

  if(($_POST['password1'] == $user['password'])){ //if the password entered is correct
    $_SESSION['email'] = $user['email'];
    $_SESSION['first_name'] = $user['first_name'];
    $_SESSION['last_name'] = $user['last_name'];
    $_SESSION['active'] = $user['active'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['bio'] = $user['bio'];
    $_SESSION['img1'] = $user['img1'];
    $_SESSION['size1'] = $user['size1'];
    $_SESSION['price1'] = $user['price1'];
    $_SESSION['product1'] = $user['product1'];
    $_SESSION['profile_image'] = $user['profileimg'];
    $_SESSION['desc1'] = $user['desc1'];
    $_SESSION['password'] = $user['password']; // all required session values
    $_SESSION['img2'] = $user['img2'];
    $_SESSION['product2'] = $user['product2'];
    $_SESSION['desc2'] = $user['desc2'];
    $_SESSION['size2'] = $user['size2'];
    $_SESSION['price2'] = $user['price2'];
    $_SESSION['img3'] = $user['img3'];
    $_SESSION['product3'] = $user['product3'];
    $_SESSION['desc3'] = $user['desc3'];
    $_SESSION['size3'] = $user['size3'];
    $_SESSION['price3'] = $user['price3'];
    $_SESSION['img4'] = $user['img4'];
    $_SESSION['product4'] = $user['product4'];
    $_SESSION['desc4'] = $user['desc4'];
    $_SESSION['size4'] = $user['size4'];
    $_SESSION['price4'] = $user['price4'];
    $_SESSION['img5'] = $user['img5'];
    $_SESSION['product5'] = $user['product5'];
    $_SESSION['desc5'] = $user['desc5'];
    $_SESSION['size5'] = $user['size5'];
    $_SESSION['price5'] = $user['price5'];




    $_SESSION['logged_in'] = true;
    $_SESSION['message'] = "Login has been successful! Welcome, $email";
    header("location:success.php");

    if(($_SESSION['active'])==0){ //if the password is inactive
      $_SESSION['message'] = "You must activate $email to be able to use it.";


    }

  }


  else{

    $_SESSION['message']="The password you have entered is incorrect."; //if the password entered is incorrrect
    header("location:error.php");
  }


}



 ?>

<?php

require 'db.php';
session_start();


$email = $_SESSION['email'];
$email1 = $mysqli->escape_string($_POST['email']);




if($email == $email1){ //validates email

  if (isset($_POST['submit1'])){ //if button 1 is clicked

    $target= "images/".basename($_FILES['image']['name']); //variable for pictures with storage location
    $imageName= $mysqli->escape_string($_FILES["image"]["name"]);
    $imageType= $mysqli->escape_string($_FILES["image"]["type"]);
    $title1 = $mysqli->escape_string($_POST['product1']);
    $desc1 = $mysqli->escape_string($_POST['desc1']);
    $size1 = $mysqli->escape_string($_POST['size']);
    $price1 = $mysqli->escape_string($_POST['price']);

    if(substr($imageType,0,5)=="image"){ //if the file uploaded is an image

      $mysqli->query("UPDATE users SET img1='$imageName',desc1= '$desc1',product1= '$title1', size1= '$size1', price1='$price1' WHERE email = '$email'")or die($mysqli->error);
      $_SESSION['img1'] = $imageName; //it will successfully upload product information
      $_SESSION['product1'] = $title1;
      $_SESSION['desc1'] = $desc1;
      $_SESSION['message'] = "Successfully uploaded image!";
      header("location:success.php");

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
          header("location:error.php"); //if the image was not in picture format an error will be given
          }
        }

  if (isset($_POST['submit2'])){ //this is the same as the above but for page 2

    $target= "images/".basename($_FILES['image']['name']);
    $imageName= $mysqli->escape_string($_FILES["image"]["name"]);
    $imageType= $mysqli->escape_string($_FILES["image"]["type"]);
    $title1 = $mysqli->escape_string($_POST['product1']);
    $desc1 = $mysqli->escape_string($_POST['desc1']);
    $size1 = $mysqli->escape_string($_POST['size']);
    $price1 = $mysqli->escape_string($_POST['price']);

    if(substr($imageType,0,5)=="image"){

      $mysqli->query("UPDATE users SET img2='$imageName',desc2= '$desc1',product2= '$title1', size2= '$size1', price2='$price1' WHERE email = '$email'")or die($mysqli->error);

      $_SESSION['message'] = "Successfully uploaded image!";
      header("location:success.php");

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
          header("location:error.php");
          }
  }

  if (isset($_POST['submit3'])){

    $target= "images/".basename($_FILES['image']['name']);
    $imageName= $mysqli->escape_string($_FILES["image"]["name"]);
    $imageType= $mysqli->escape_string($_FILES["image"]["type"]);
    $title1 = $mysqli->escape_string($_POST['product1']);
    $desc1 = $mysqli->escape_string($_POST['desc1']);
    $size1 = $mysqli->escape_string($_POST['size']);
    $price1 = $mysqli->escape_string($_POST['price']);

    if(substr($imageType,0,5)=="image"){

      $mysqli->query("UPDATE users SET img3='$imageName',desc3= '$desc1',product3= '$title1', size3= '$size1', price3='$price1' WHERE email = '$email'")or die($mysqli->error);

      $_SESSION['message'] = "Successfully uploaded image!";
      header("location:success.php");

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
          header("location:error.php");
          }
  }

  if (isset($_POST['submit4'])){

    $target= "images/".basename($_FILES['image']['name']);
    $imageName= $mysqli->escape_string($_FILES["image"]["name"]);
    $imageType= $mysqli->escape_string($_FILES["image"]["type"]);
    $title1 = $mysqli->escape_string($_POST['product1']);
    $desc1 = $mysqli->escape_string($_POST['desc1']);
    $size1 = $mysqli->escape_string($_POST['size']);
    $price1 = $mysqli->escape_string($_POST['price']);

    if(substr($imageType,0,5)=="image"){

      $mysqli->query("UPDATE users SET img4='$imageName',desc4= '$desc1',product4= '$title1', size4= '$size1', price4='$price1' WHERE email = '$email'")or die($mysqli->error);

      $_SESSION['message'] = "Successfully uploaded image!";
      header("location:success.php");

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
          header("location:error.php");
          }
  }

  if (isset($_POST['submit5'])){

    $target= "images/".basename($_FILES['image']['name']);
    $imageName= $mysqli->escape_string($_FILES["image"]["name"]);
    $imageType= $mysqli->escape_string($_FILES["image"]["type"]);
    $title1 = $mysqli->escape_string($_POST['product1']);
    $desc1 = $mysqli->escape_string($_POST['desc1']);
    $size1 = $mysqli->escape_string($_POST['size']);
    $price1 = $mysqli->escape_string($_POST['price']);

    if(substr($imageType,0,5)=="image"){

      $mysqli->query("UPDATE users SET img5='$imageName',desc5= '$desc1',product5= '$title1', size5= '$size1', price5='$price1' WHERE email = '$email'")or die($mysqli->error);

      $_SESSION['message'] = "Successfully uploaded image!";
      header("location:success.php");

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
          header("location:error.php");
          }
  }


}
else{
  $_SESSION['message'] = "invalid email";
  header("location:error.php");

}


 ?>




<html>


</html>

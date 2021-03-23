<?php
require 'db.php';
session_start();


$active = '1';
if(($_SESSION['active']) != $active){

  header('location:home.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['submit1']) ||($_POST['submit2']) ||($_POST['submit3'])||($_POST['submit4'])||($_POST['submit5'])    ){ //each button saves onto a different page

    require 'items.php';

  }
}
 ?>

<html>

<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>

<div class="navbar">

  <ul>

    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="profilesearch.php">Search</a></li>
    <li><a href="mainhome.php">Home</a></li>
    <li class = "active"><a href="profile.php">Profile</a></li>
    <li><a href="Logout.php">Log Out</a></li>

      </ul>
      </div>


<div class = containeritems>

  <div class = "itemstitle">
    <h1>Upload Products</h1>
  </div>

<div class = "itemsadd">
<form action="items.php" method ="post" enctype="multipart/form-data">

  <input class ="email"placeholder="Re-enter your Email*" name="email" type="text" required>

  <input class = "product" placeholder="Name of product*" name="product1" type="text" required>
  <input class = "size" placeholder="Sizes*" name="size" type="text" required>
  <input class = "price" placeholder="Price*" name="price" type="text" required>

  <textarea name="desc1" placeholder="description of product"></textarea>
  <input type="file" name="image" required>



  <div class="savepageno">
  <button type ="submit1" name="submit1" >1</button>
  <button type ="submit2" name="submit2" >2</button>
  <button type ="submit3" name="submit3" >3</button>
  <button type ="submit4" name="submit4" >4</button>
  <button type ="submit5" name="submit5" >5</button>

  <div class ="infosym">

    <i class="fas fa-info-circle"></i>

    <span class="added-info">
        You can only upload up to <b>5 products</b>, click on <b>the number of which page</b> you want to upload to.
      </span>


  </div>

</div>

</form>

</div>
</div>
</html>

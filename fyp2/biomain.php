<?php
require 'db.php';
session_start();

$active = '1';
if(($_SESSION['active']) != $active){

  header('location:home.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['biobtn'])){

    require 'bio.php';

  }
}

 ?>

<html>

<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>

<div class="navbar">

  <ul>

    <li><a href="membershome.php">Home</a></li>
    <li><a href="profilesearch.php">Search</a></li>
    <li><a href="messageinbox.php">Messages</a></li>
    <li class = "active"><a href="profile.php">Profile</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="Logout.php">Log Out</a></li>

      </ul>
      </div>

      <div class = "editprofilec">

<div class = "bio-main">
 <form action="bio.php" method="post" autocomplete="off" enctype="multipart/form-data">

   <div class = "profile-title">
   <h3>Edit User Info</h3>
    </div>
   <input type = "hidden" placeholder="Email" value ="<?php echo $_SESSION['email']?>" name="email" type="text" required >
   <p>Username: </p>
   <input placeholder="Email" value ="<?php echo $_SESSION['username']?>" name="username" type="text" required disabled="disabled">

   <p>Password:</p>
    <input placeholder="Surname" value ="<?php echo $_SESSION['password']?>" name="passwordedit" type="password" required>
   <p>Firstname: </p>
   <input placeholder="Name" value ="<?php echo $_SESSION['first_name']?>"name="nameedit" type="text" required>

   <p>Surname: </p>
   <input placeholder="Surname" value ="<?php echo $_SESSION['last_name']?>" name="surnameedit" type="text" required>

   <p>Bio: </p>
   <textarea placeholder="Bio..." name="bio" type="text" required><?php echo $_SESSION['bio']?></textarea>


   <div class = "updateprofile-btn">
   <input type="submit" name="saveinfo" value="Update">
</div>
  <div class="profile-title">
   <h3>Upload new profile image</h3>
 </div>
</form>
<form action="bio.php" method="post" autocomplete="off" enctype="multipart/form-data">
   <input type="file" name="image" required>
   <div class = "updateprofile-btn">
   <input type="submit" name="upload" value="Upload Image">
 </div>

 </form>



</div>


</div>

</html<

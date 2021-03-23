<?php
session_start();

$active = '1';
if(($_SESSION['active']) != $active){

  header('location:home.php');
}
   else{




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

<body>

  <div class ="profilecontainer">

  <div class ="profileimg">

    <?php echo "<img src='images/".$_SESSION['profile_image']."' height = 230 width = 400";// this displays the profile picture?>


  </div>

  <div class="titlep">
  <h2><?php echo $_SESSION['username']; ?>'s profile</h2><br/> <!-- this displays the profile user name-->
  </div>




    <div class="maincontainerp">



<table id = "prftable"> <!-- Table that displays the session values for the user -->
  <tr><td>Email: </td><td><div class = info><?php echo $_SESSION['email'];?></div></td></tr>
  <tr><td>Firstname: </td><td><div class = info><?php echo $_SESSION['first_name'];?></div></td></tr>
  <tr><td>Surname: </td><td><div class = info><?php echo $_SESSION['last_name'];?></div></td></tr>
  <tr><td>Active: </td><td><div class = info><?php echo $_SESSION['active'];?></div></td></tr>
  <tr><td>Bio: </td><td><div class = info><?php echo $_SESSION['bio'];?></div></td></tr>
  <tr><td>Rating: </td><td><div class = info><?php echo $_SESSION['bio'];}?></div></td></tr>
</table>

</div>
<table>
<form action="biomain.php" autocomplete="off">
  <button class ="prfbtn biobtn" name ="dbbtn"/>Edit profile</button> <!-- button to edit profile -->
</form>

<form action="itemsmain.php" autocomplete="off">
    <button class ="prfbtn itemsbtn" name ="itemsbtn"/>Add items</button> <!-- The button to add products-->
  </form>


    <form action="itemsedit.php" autocomplete="off">
        <button class ="prfbtn itemsbtn" name ="itemsbtn"/>View Items</button>
      </form>









</table>
</div>
<div class="backgroundimg"></div>
</body>
</html>

<!-- //create db must rbe unique, so use email name or username to create it -->

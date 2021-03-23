<?php
require 'db.php';
session_start();

$active = '1';
if(($_SESSION['active']) != $active){

  header('location:home.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['searchbtn'])){

    require 'searchresults.php';
  }



}
 ?>



<html>
<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>

<title>Search</title>

<div class="navbar"> <!-- navigation bar -->

  <ul>

    <li><a href="membershome.php">Home</a></li>
    <li class = "active"><a href="profilesearch.php">Search</a></li>
    <li><a href="messageinbox.php">Messages</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="Logout.php">Log Out</a></li>

      </ul>
      </div>
<body>

<div class="maincontainers">
  <div class="searchtitle"><!-- search title -->
    <h1>SEARCH</h1>
  </div>

<form action="searchresults.php" method = "post"><!-- search bar form -->

  <input type="text" name="search" id="searchbar" placeholder=" Search..." required>
  <button class ="submitbtn" id="searchbtn" name ="submitbtn"/>Search!</button>

</form>
</div>

<div class="backgroundimg"></div> <!--  background imag !-->
</body>


</html>

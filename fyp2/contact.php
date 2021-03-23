<?php
require 'db.php';
session_start();





if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['contact-submit'])){

    require 'contactmail.php';

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
    <li><a href="profile.php">Profile</a></li>
    <li class = "active"><a href="Contact.php">Contact Us</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="Logout.php">Log Out</a></li>


      </ul>
      </div>


<div class = containeritems>

  <div class = "itemstitle">
    <h1>Contact Us</h1>
  </div>

<div class = "itemsadd">
<form action="contactmail.php" method ="post" enctype="multipart/form-data">
  <!--form for email contacting !-->

  <input class ="email"placeholder="Your Email..." name="email" type="text" required>
  <input class ="name"placeholder="Your name..." name="name" type="text" required>
  <input class = "Topic" placeholder="Topic..." name="topic" type="text" required>
  <textarea name="desc1" placeholder="Your message..."></textarea>
  <button type ="submit" name="contact-submit">Send</button>



</div>



</form>

</div>

<div class="footer">
  <div class="footer-content">
    <ul>
      <li><a href="#"><i class="fab fa-instagram"></i>
      <li><a href="#"><i class="fab fa-twitter"></i>
      <li><a href="#"><i class="fab fa-facebook"></i>
      <li><a href="#"><i class="fab fa-linkedin"></i>
    </ul>
  </div>




</div>
</html>

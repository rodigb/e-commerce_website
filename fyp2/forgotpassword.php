<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['password-reset'])){
    $newpassword = $mysqli->escape_string($_GET['passwordreset-field']);
    $email = $mysqli->escape_string($_GET['email']);

    require 'forgotpasswordmail.php';
  }
}

?>


<html>

<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>




<body>


<div class ="loginpage">
  <header>
    <div class="navbar">

      <!-- <div class= "logo">
        <img src="logo.png">
        </div> -->

      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Contact.html">Contact Us</a></li>
          </ul>
          </div>


  <div class="title"><h1>Password reminder</h1>
  </div>


  </header>
<div class = "container">
  <div class = "left">
  <div class = "Loginform">
   <form action="forgotpasswordmail.php" method="post" autocomplete="off" required> <!-- form to input details for password retrieval -->

    <p>Your Email:</p>
    <input placeholder="Email" name="email" type="text">

    <input type ="submit" name ="password-reset" value="Submit">

   </form>






  </div>
</div>
   <div class = "right">

   </div>

  </div>
  <div class="backgroundimg"></div> <!-- background image of page -->

</div>
</body>
  <div class="footer">
    <div class="footer-content"><!-- social media footer-->
      <ul>
        <li><a href="#"><i class="fab fa-instagram"></i>
        <li><a href="#"><i class="fab fa-twitter"></i>
        <li><a href="#"><i class="fab fa-facebook"></i>
        <li><a href="#"><i class="fab fa-linkedin"></i>
      </ul>
    </div>
  </div>


</html>

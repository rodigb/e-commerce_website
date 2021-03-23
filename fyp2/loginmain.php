<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['loginbtn'])){

    require 'login.php';
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


      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Contact.html">Contact Us</a></li>
          </ul>
          </div>


  <div class="title"><h1>Log In</h1>
  </div>


  </header>
<div class = "container">
  <div class = "left">
  <div class = "Loginform">
   <form action="index.php" method="post" autocomplete="off" required> <!-- login page form !-->

    <p>Username:</p>
    <input placeholder="Username" name="email1" type="text">
    <p>Password:</p>
    <input placeholder="Password" name= "password1" type="password">
    <br></br>
    <input type ="submit" name ="loginbtn" value="Log In">

   </form>

   <div class="forgot-password">
     <a href="forgotpassword.php">Forgot Password?</a> | <a href="registermain.php">New User?</a>
   </div>

  </div>
</div>
   <div class = "right">

   </div>

  </div>
  <div class="backgroundimg"></div>

</div>
</body>
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

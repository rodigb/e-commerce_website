<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['registerbtn'])){

    require 'register.php';

  }
}

 ?>

<html>
<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>



<body>
<div class = "registerform">

  <header>

    <div class="navbar">

      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Contact.html">Contact Us</a></li>
          </ul>
          </div>

    <div class="title"><h1>Register</h1>
    </div>
  </header>

  <div class = "container">

    <div class = "right">
      <div class = "Loginform">
       <form action="registermain.php" method="post" autocomplete="off"> <!-- Register form !-->



         <p>Email:</p>
         <input placeholder="Email" name="email" type="text" required>
         <p>Username:</p>
         <input placeholder="Username" name= "username" type="text" required>
         <p>Password:</p>
         <input placeholder="Password" name= "password" type="text" required>
         <p>Name:</p>
         <input placeholder="Name" name= "firstname" type="text" required>
         <p>Surname:</p>
         <input placeholder="Surname" name= "lastname" type="text" required>

         <input type ="submit" name ="registerbtn" value="Register">

 </form>

 <div class="existinguser">
   <a href="loginmain.php">Existing User?</a>
 </div>

</div>
 </div>
 <div class = "left">

 </div>

 <div class="backgroundimg"></div>

</div>

</div>
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

</html<

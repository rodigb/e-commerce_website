<?php

session_start(); //success page for when account is verified

if( isset($_SESSION['message']) AND !empty($_SESSION['message'])):
echo $_SESSION['message'];
else:
  header("location:index.php");
endif;

 ?>
<h1>Successfully activated! please click on the button to relog.</h1>




<form action="logout.php" autocomplete="off">
  <button class ="button" name ="logoutbtn"/>Log Out</button>
</form>

<html>
<link rel="stylesheet" type="text/css" href="Main.css">
<header>

  <div class="navbar">



    <ul>
      <li><a href="Logout.php">Log Out</a></li>

        </ul>
        </div>
</header>
<body>
<div class ="errorcontainer">

  <div class="errortitle">
  <h1>Error</h1>
  </div>
<?php //this page is for actions that give errors

session_start();

if( isset($_SESSION['message']) AND !empty($_SESSION['message'])):?>
<div style='color:black; padding-left:20px; padding-bottom:20px;line-height: 0.5px;  left:26%;
  top:50%;
  position: absolute;'>
<?php echo $_SESSION['message']; //if there is a message, it will have a design and be displayed on the page?></div>
<?php
else:
  header("location:index.php");
endif;

 ?>




 <div class ="successpage">

<form action="logout.php" autocomplete="off">
  <input type ="submit" name ="homebtn" value="Home"</input>
</form>
</div>
</div>
 <div class="backgroundimg"></div>
</body>
</html>

<link rel="stylesheet" type="text/css" href="Main.css">
<header>

  <div class="navbar">



    <ul>
      <li><a href="Logout.php">Log Out</a></li>

        </ul>
        </div>

</header>
<body>
<div class ="successcontainer">

  <div class="successtitle">
  <h1>Success</h1>
  </div>
<?php // page is for successful actions

session_start();

if( isset($_SESSION['message']) AND !empty($_SESSION['message'])): //success container message (if its not empty) will give us a design and output the message?>
<div style='color:black; padding-left:20px; padding-bottom:20px;line-height: 0.5px;  left:21%;
  top:50%;
  position: absolute;'>
<?php echo $_SESSION['message'];?></div>
<?php
else:
  header("location:home.php"); //redirect to home.php
endif;

 ?>




 <div class ="successpage">

<form action="membershome.php" autocomplete="off">
  <input type ="submit" name ="homebtn" value="Home"</input>
</form>
</div>
</div>
 <div class="backgroundimg"></div>
</body>

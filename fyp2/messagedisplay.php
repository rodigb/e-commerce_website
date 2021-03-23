<?php
require 'db.php';
session_start();

if(isset($_GET['ID'])){

  $ID = $mysqli->escape_string($_GET['ID']);


  $sql = "SELECT * FROM privatemessages WHERE id='$ID'";
  $result = $mysqli->query($sql) or die("bad query");
  $row = mysqli_fetch_array($result);





}
else{
  header('location:messagemain.php');
}



?>
<html>


<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>

<div class="navbar">

  <ul>

    <li><a href="membershome.php">Home</a></li>
    <li><a href="profilesearch.php">Search</a></li>
    <li class = "active"><a href="messageinbox.php">Messages</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="Logout.php">Log Out</a></li>

      </ul>
      </div>
<body>

  <div class = "containermsg">

    <div class = "msg-title">
      <h1>Message</h1>
    </div>

    <div class = "msg-from">

      <?php //displays the message on its own
      echo "<p>From: ".$row['from_user']; "</p>";
      ?>
    </div>

    <div class = "msg-subject">
      <?php
      echo "<p>Subject: ".$row['subject']; "</p>";
      ?>
    </div>

    <div class = "msg-body">
      <?php
      echo "<p>Message: ".$row['message']; "</p>";
      ?>
    </div>
<div class = "msg-btns">

  <div class = "msg-btns3">

  <form action="messageinbox.php" autocomplete="off">
    <button name ="backbtn"/>Back</button>
  </form>


</div>
</div>
</div>


</body>

</html>

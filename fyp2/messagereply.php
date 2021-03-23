<?php

 ?>

 <html>

 <?php
 require 'db.php';

 session_start();


 if(isset($_GET['ID'])){

   $ID = $mysqli->escape_string($_GET['ID']);


   $sql = "SELECT * FROM privatemessages WHERE id='$ID'";
   $result = $mysqli->query($sql) or die("bad query");
   $row = mysqli_fetch_array($result);


   $replysubject = $row['subject'];
   $replyuser = $row['from_user']; //creates variables to make replying easier

 }

else{
  location('header:messagemain.php');
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
    <h1>Reply</h1>
  </div>

  <div class = "msg-to">
    <form method = "post" action="message.php" method="post" autocomplete="off">
      <input placeholder="Username" name="username" type="text" value = "<?php echo $replyuser?>"required><!-- determining preset values for the reply message -->

  </div>

  <div class = "msg-subject1">


      <input placeholder="Subject" name= "subject" type="text" value = "RE: <?php echo $replysubject?>" required>


  </div>

  <div class = "msg-body1">


      <textarea placeholder= "Message..." name="message" type="text" required></textarea>




  </div>
<div class = "msg-sendd">
<div class = "msg-send">

    <button class ="sendmsg" name ="messagebtn">Send</button>
  </form>




</div>
</div>
</div>

 </html>

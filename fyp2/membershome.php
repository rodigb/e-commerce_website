<?php
session_start();
require 'db.php';
$active = '1';
if(($_SESSION['active']) != $active){ //checks to see if session is active, if not redirect to guest home

  header('location:home.php');
}




 ?>

<html>


  <title>
    Home
  </title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>
  <body onload="document.body.style.opacity='1'">



<body>





  <header>

    <div class="navbar"><!-- navigation bar !-->

      <ul>

             <li class = "active"><a href="membershome.php">Home</a></li>
             <li><a href="profilesearch.php">Search</a></li>
             <li><a href="messageinbox.php">Messages</a></li>
             <li><a href="profile.php">Profile</a></li>
             <li><a href="Contact.php">Contact Us</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="Logout.php">Log Out</a></li>
          </ul>
          </div>
          <div class="hometitle">
            <h1>AZZAB</h1>
            </div>
          <div class="livetitle">
            <h1>MARKETPLACE CHAT</h1>
          </div>

            <div class="livechatcontainer">




              <form method = "post" action="memberlivemessage.php" autocomplete="off"><!-- global chat form -->
                <textarea maxlength="50" placeholder= "Message..." name="livechatmessage" type="text" required></textarea>
                <button class ="composebtn" name ="sendlive"/>Send</button>
              </form>
              <div class="messagescontainer">


                  <table id = "livechattable">

                  <?php

                  $inbox = $mysqli->query("SELECT * FROM livechat");
                  $row = mysqli_num_rows($inbox);

                  while($row = mysqli_fetch_array($inbox)){//displays the marketplace chat within the table "livechattable"
                    $id = $row['id'];
                    echo "<tr>";
                    echo "<td max-width ='13%'>". "<i class='fas fa-user'></i>"." ".$row['username']. "<br><br> ".$row['live_message']."</td>";
                    echo "<td width ='14%'>"."<br>".$date = $row['msgtime']."</td>";
                    echo "</tr>";


                }

                  ?>


                </table>


              </div>




            </div>








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

<div class="backgroundimg"></div>




</body>



</html>

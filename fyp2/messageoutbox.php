<?php

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

   <div class ="profilecontainer2">



      <?php
      require 'db.php';
      session_start();
      $user = ($_SESSION['username']);


      $inbox = $mysqli->query("SELECT * FROM privatemessages WHERE from_user ='$user'");// this is all the same as the inbox, but instead
      //of gathering results from senders, it looks at "to_users" to view all received messages
      $row = mysqli_num_rows($inbox);




      if($row==0){

        echo "You have no new messages.";

      }

      else{

      if($row!=0){
        echo "<table name = 'message_table'>";
        echo "<tr>";
        echo "<td>";
        echo "</td>";
        echo "<td>To</td>";
        echo "<td>Subject</td>";
        echo "<td>Message</td>";
        echo "<td>Date</td>";
      }

          while($row = mysqli_fetch_array($inbox)){


            $id = $row['id'];


            echo "<tr>";
            echo "<td> </td>";
            echo "<td>".$touser = $row['to_user']."</td>";
            echo "<td><a href='messagedisplay.php?ID=$id'>".$subject = $row['subject']."</a></td>";
            echo "<td>".$message = $row['message']."</td>";
            echo "<td>".$date = $row['msgdate']."</td>";
            echo "</tr>";


        }

     }


       ?>


     <form action="messagemain.php" autocomplete="off">
       <button class ="composebtn" name ="composebtn"/>Compose</button>
     </form>
     <form action="messageinbox.php" autocomplete="off">
         <button class ="inboxbtn" name ="inboxbtn"/>Inbox</button>
       </form>

       <form action="messageoutbox.php" autocomplete="off">
           <button class ="outboxbtn" name ="Outbox"/>Outbox</button>
         </form>

       </div>






     <div class="backgroundimg"></div>
 </html>

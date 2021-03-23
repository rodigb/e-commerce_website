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


      $active = '1';
      if(($_SESSION['active']) != $active){ // checks to see if session is active

        header('location:home.php');
      }
      $user = ($_SESSION['username']);


      $inbox = $mysqli->query("SELECT * FROM privatemessages WHERE to_user ='$user'");//selects all from the table private messages where the column to_user is the same as the session user
      $row = mysqli_num_rows($inbox);




      if($row==0){ //no results
        echo "<table name = 'no_messages'>";
        echo "<tr>";
        echo "</td>";
        echo "<td>You have no new messages.</td>";


      }

      else{

      if($row!=0){ //produce initial table headers for when there are results
        echo "<table name = 'message_table'>";
        echo "<tr>";
        echo "<td>";
        echo "</td>";
        echo "<td>From</td>";
        echo "<td>Subject</td>";
        echo "<td>Message</td>";
        echo "<td>Date</td>";
        echo "<td></td>";
        echo "<td></td>";
      }

          while($row = mysqli_fetch_array($inbox)){//table displays all messages


            $id = $row['id'];


            echo "<tr>";
            echo "<td> </td>";
            echo "<td>".$fromuser = $row['from_user']."</td>";
            echo "<td><a href='messagedisplay.php?ID=$id' >".$subject = $row['subject']."</a></td>";
            echo "<td>".$message = $row['message']."</td>";
            echo "<td>".$date = $row['msgdate']."</td>";
            echo "<td><a href='messagereply.php?ID=$id'>Reply</a></td>";
            echo "<td><a href ='messagedelete.php?ID=$id'>Delete</td>"; //reply and delete buttons here

            echo "</tr>";


        }

     }


       ?>




     <form action="messagemain.php" autocomplete="off">
       <button class ="composebtn" name ="composebtn"/>Compose</button>
     </form> <!--all mail buttons !-->
     <form action="messageinbox.php" autocomplete="off">
         <button class ="inboxbtn" name ="inboxbtn"/>Inbox</button>
       </form>

       <form action="messageoutbox.php" autocomplete="off">
           <button class ="outboxbtn" name ="Outbox"/>Outbox</button>
         </form>

       </div>







     <div class="backgroundimg"></div>
 </html>

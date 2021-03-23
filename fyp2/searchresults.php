<html>


 <link rel="stylesheet" type="text/css" href="Main.css">
 <script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>

<div class="navbar">

  <ul>


         <li><a href="membershome.php">Home</a></li>
         <li class = "active"><a href="profilesearch.php">Search</a></li>
         <li><a href="messageinbox.php">Messages</a></li>
         <li><a href="profile.php">Profile</a></li>
         <li><a href="Contact.php">Contact Us</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="Logout.php">Log Out</a></li>

      </ul>
      </div>
      <form id ="searchform" action="searchresults.php" method = "post">
        <button class ="submitbtn" id="searchbtn2" name ="submitbtn"/>Go!</button>
        <input type="text" name="search" id="searchbar2" placeholder=" Search..." required>


      </form>
</html>

<?php

require 'db.php';
session_start();

$active = '1';
if(($_SESSION['active']) != $active){//checks to see if user is active

  header('location:home.php');
}
$output = '';

if(isset($_POST['search'])){

  $qsearch = $mysqli->escape_string($_POST['search']);
  $qsearch = preg_replace("# [^0-9a-z] #i","",$qsearch);



  $sql = $mysqli->query("SELECT * FROM users where username LIKE '%$qsearch%' OR bio LIKE '%$qsearch%'") or die("search failed"); //finds results that have similar values to qsearch
  $count = mysqli_num_rows($sql);


  if ($count == 0){ //when no results are found
    $output = '<div class = "nresult" <h1>No Results</h1></div>';
  }
  else{
    while ($row = mysqli_fetch_array($sql)){ //when a result is found, it will produce a table of results.
      $username = $row['username'];
      $bio = $row['bio'];
      $id = $row['id'];

      $output .= '<div class="maincontainerr"><div class= "resultscontainer"><div class = "searchtable">'
      .'<table><tr><td>Username:</td><td>'."<a href = 'profilesearch.php?ID={$row['id']}'>".$username.'</td></tr> <tr><td>Description:</td><td>'.$bio.
      '</td></tr></table>'.'</div></div></div>'; //results should provide links to profiles with the href

    }

  }

}

print("'<div class=”overflow-container”>'$output'</div>");
 ?>

 <html>


 <body>



 </body>

 <div class="backgroundimg"></div>



 </html>

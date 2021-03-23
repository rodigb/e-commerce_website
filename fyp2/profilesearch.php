<?php
require 'db.php';

session_start();
$active = '1';
if(($_SESSION['active']) != $active){

  header('location:home.php');
}

if(isset($_GET['ID'])){ // when the username is clicked on for the search results page, this will get the id and only select the rows with the same id and display them

  $ID = $mysqli->escape_string($_GET['ID']);


  $sql = "SELECT * FROM users WHERE id='$ID'";
  $result = $mysqli->query($sql) or die("bad query");
  $row = mysqli_fetch_array($result);




}
else{
  header('location:search.php'); //if it doesnt do the above it redirects them
}?>





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

<body>



<div class="maincontainerps">

      <div class ="profileimgcontainer">

          <?php echo "<img src='images/".$row['profileimg']."' height = 230 width = 400";?>

      </div>


      <div class="titlep2">
      <h2><?php echo $row['username']; ?>'s profile</h2><br/>
      </div>


  <div class="maincontainerp">

<table> <!-- table to display row results -->
  <tr><td>Email: </td><td><?php echo $row['email'];?></td></tr>
  <tr><td>Firstname: </td><td><?php echo $row['first_name'];?></td></tr>
  <tr><td>Surname: </td><td><?php echo $row['last_name'];?></td></tr>
  <tr><td>Description: </td><td><?php echo $row['bio'];?></td></tr>



</table>
</div>
<form name ="contact-message" action="messagemain.php" autocomplete="off">
  <button class ="messageuser" name ="messageuserbtn"/>Message</button>
</form>
<!-- Form message button -->


</div>

<div class="itemscontainer">


  <div class="titlei">
    <h1>Items for sale</h1>
  </div>





<?php  if (isset($_POST['pagebtn1'])){ //when the page button 1 is clicked it will display all product 1 results

    if(empty($row['product1'])){

      $sql = "SELECT * FROM users WHERE id='$ID'"; // selects results from users where the id is the same
       echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
      else{ ?>


    <div class="containerp1">
      <?php echo "<img src='images/".$row['img1']."' height = 350 width = 350"; //uploads the picture?>
    </div>


    <div class="containerd1">
      <h2>Product: <?php echo $row['product1'];?></h2>
      <p>Description: <br><br><?php echo $row['desc1'];?></p>
      <p>Sizes: <?php echo $row['size1'];?></p>
      <p>Price: <?php echo "£".$row['price1'];?></p>
    </div>  <?php }}?>


<?php  if (isset($_POST['pagebtn2'])){//this one is for button 2

    if(empty($row['product2'])){

      $sql = "SELECT * FROM users WHERE id='$ID'";
       echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
      else{ ?>


    <div class="containerp1">
      <?php echo "<img src='images/".$row['img2']."' height = 350 width = 350";?>
    </div>


    <div class="containerd1">
      <h2>Product: <?php echo $row['product2'];?></h2>
      <p>Description: <br><br><?php echo $row['desc2'];?></p>
      <p>Sizes: <?php echo $row['size2'];?></p>
      <p>Price: <?php echo "£".$row['price2'];?></p>
    </div>

  <?php }}?>


<?php  if (isset($_POST['pagebtn3'])){

    if(empty($row['product3'])){

      $sql = "SELECT * FROM users WHERE id='$ID'";
       echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
      else{ ?>


    <div class="containerp1">
      <?php echo "<img src='images/".$row['img3']."' height = 350 width = 350";?>
    </div>


    <div class="containerd1">
      <h2>Product: <?php echo $row['product3'];?></h2>
      <p>Description: <br><br><?php echo $row['desc3'];?></p>
      <p>Sizes: <?php echo $row['size3'];?></p>
      <p>Price: <?php echo "£".$row['price3'];?></p>
    </div>

  <?php }}?>


<?php  if (isset($_POST['pagebtn4'])){

    if(empty($row['product4'])){

      $sql = "SELECT * FROM users WHERE id='$ID'";
       echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
      else{ ?>


    <div class="containerp1">
      <?php echo "<img src='images/".$row['img4']."' height = 350 width = 350";?>
    </div>


    <div class="containerd1">
      <h2>Product: <?php echo $row['product4'];?></h2>
      <p>Description: <br><br><?php echo $row['desc4'];?></p>
      <p>Sizes: <?php echo $row['size4'];?></p>
      <p>Price: <?php echo "£".$row['price4'];?></p>
    </div> <?php }}?>


<?php  if (isset($_POST['pagebtn5'])){



      if(empty($row['product5'])){

        $sql = "SELECT * FROM users WHERE id='$ID'";
         echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
        else{ ?>


      <div class="containerp1">
        <?php echo "<img src='images/".$row['img5']."' height = 350 width = 350";?>
      </div>


      <div class="containerd1">
        <h2>Product: <?php echo $row['product5'];?></h2>
        <p>Description: <br><br><?php echo $row['desc5'];?></p>
        <p>Sizes: <?php echo $row['size5'];?></p>
        <p>Price: <?php echo "£".$row['price5'];?></p>
      </div>

  <?php }}?>




<div class = "itempagebuttons"><!-- form for the page numberings -->
  <form class = "itempagebtns" name = "itempagebtns" action="" method="post" autocomplete="off" required>

  <input type = "submit" class ="pagebtn1" name="pagebtn1" value ="1">
  <input type = "submit" class ="pagebtn1" name="pagebtn2" value ="2">
  <input type = "submit" class ="pagebtn1" name="pagebtn3" value ="3">
  <input type = "submit" class ="pagebtn1" name="pagebtn4" value ="4">
  <input type = "submit" class ="pagebtn1" name="pagebtn5" value ="5">

  </form>

</div>



</div>


<div class="backgroundimg"></div>
</body>
</html>

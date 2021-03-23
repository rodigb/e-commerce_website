<?php
require 'db.php';

session_start();
$active = '1';
if(($_SESSION['active']) != $active){

  header('location:home.php');
}


?>

<html>
<link rel="stylesheet" type="text/css" href="Main.css">
<script src="https://kit.fontawesome.com/d83bcc6107.js" crossorigin="anonymous"></script>

<div class="navbar">

  <ul>

    <li><a href="membershome.php">Home</a></li>
    <li><a href="profilesearch.php">Search</a></li>
    <li><a href="messageinbox.php">Messages</a></li>
    <li class = "active"><a href="profile.php">Profile</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="Logout.php">Log Out</a></li>

      </ul>
      </div>

<body>

<div class="itemscontainer1">

  <div class="titlei">
    <h1>Items for sale</h1>
  </div>

<?php

 if (isset($_POST['pagebtn1'])){ // allows the viewing of the current user sessions first product

    if(empty($_SESSION['product1'])){


       echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
      else{ ?>


    <div class="containerp1">
      <?php echo "<img src='images/".$_SESSION['img1']."' height = 350 width = 350";//image displayed?>
    </div>


    <div class="containerd1">
      <h2>Product: <?php echo $_SESSION['product1'];?></h2><!--shows the result of product 1 in the container !-->
      <p>Description: <br><br><?php echo $_SESSION['desc1'];?></p>
      <p>Sizes: <?php echo $_SESSION['size1'];?></p>
      <p>Price: <?php echo "£".$_SESSION['price1'];?></p>
    </div>  <?php }}?>



    <?php

     if (isset($_POST['pagebtn2'])){ // this is the same as pagebtn1, but displays for the second product...

        if(empty($_SESSION['product2'])){


           echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
          else{ ?>


        <div class="containerp1">
          <?php echo "<img src='images/".$_SESSION['img2']."' height = 350 width = 350";?>
        </div>


        <div class="containerd1">
          <h2>Product: <?php echo $_SESSION['product2'];?></h2>
          <p>Description: <br><br><?php echo $_SESSION['desc2'];?></p>
          <p>Sizes: <?php echo $_SESSION['size2'];?></p>
          <p>Price: <?php echo "£".$_SESSION['price2'];?></p>
        </div>  <?php }}?>




        <?php

         if (isset($_POST['pagebtn3'])){

            if(empty($_SESSION['product3'])){


               echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
              else{ ?>


            <div class="containerp1">
              <?php echo "<img src='images/".$_SESSION['img3']."' height = 350 width = 350";?>
            </div>


            <div class="containerd1">
              <h2>Product: <?php echo $_SESSION['product3'];?></h2>
              <p>Description: <br><br><?php echo $_SESSION['desc3'];?></p>
              <p>Sizes: <?php echo $_SESSION['size3'];?></p>
              <p>Price: <?php echo "£".$_SESSION['price3'];?></p>
            </div>  <?php }}?>




            <?php

             if (isset($_POST['pagebtn4'])){

                if(empty($_SESSION['product4'])){


                   echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
                  else{ ?>


                <div class="containerp1">
                  <?php echo "<img src='images/".$_SESSION['img4']."' height = 350 width = 350";?>
                </div>


                <div class="containerd1">
                  <h2>Product: <?php echo $_SESSION['product4'];?></h2>
                  <p>Description: <br><br><?php echo $_SESSION['desc4'];?></p>
                  <p>Sizes: <?php echo $_SESSION['size4'];?></p>
                  <p>Price: <?php echo "£".$_SESSION['price4'];?></p>
                </div>  <?php }}?>


                <?php

                 if (isset($_POST['pagebtn5'])){

                    if(empty($_SESSION['product5'])){


                       echo "<p style='margin-left:30px;'>"."This user has no products on this page...";}
                      else{ ?>


                    <div class="containerp1">
                      <?php echo "<img src='images/".$_SESSION['img5']."' height = 350 width = 350";?>
                    </div>


                    <div class="containerd1">
                      <h2>Product: <?php echo $_SESSION['product5'];?></h2>
                      <p>Description: <br><br><?php echo $_SESSION['desc5'];?></p>
                      <p>Sizes: <?php echo $_SESSION['size5'];?></p>
                      <p>Price: <?php echo "£".$_SESSION['price5'];?></p>
                    </div>  <?php }}?>






<div class = "itempagebuttons">
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
<!-- //create db must rbe unique, so use email name or username to create it -->

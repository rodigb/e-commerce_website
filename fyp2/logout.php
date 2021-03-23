<?php

session_destroy(); //destroys and starts an empty session
session_start();
$_SESSION = [];
header('location:Home.php');


 ?>

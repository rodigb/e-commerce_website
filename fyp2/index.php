<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['loginbtn'])){

    require 'login.php';
  }

  elseif (isset($_POST['registerbtn'])){

    require 'register.php';

  }

}
 ?>

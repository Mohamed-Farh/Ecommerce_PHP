<?php
//start session
  session_start();
  //unset session
  session_unset();
  //destroy session
  session_destroy();
  header('location:admin.php');
  exit();   
<?php
$con = mysqli_connect("localhost","root","","req");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    print_r($_POST);
    exit;
    if($_POST["part"]=="name")
    {
      echo "Enter correct particulars";
    }
    else{
    $part = $_POST["part"];
    }
  }
  ?>

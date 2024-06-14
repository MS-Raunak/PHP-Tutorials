<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $db = "crud";


   $con = mysqli_connect($server, $username, $password, $db) or die("db not connected");
    //if($con) echo "db connected";
?>
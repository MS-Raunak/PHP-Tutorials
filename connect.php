<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $db = "demo";


   $con = mysqli_connect($server, $username, $password, $db) or die("Not connected");
   if($con)
    echo "db connected";
?>
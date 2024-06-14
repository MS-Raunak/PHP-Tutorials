<?php
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $db = 'crud';

   $con = mysqli_connect($host, $username, $password, $db) or die("database not connection");
   //if($con) echo "db connected";
   
?>
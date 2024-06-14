<?php 
    include "dbconnect.php";
    $id =  $_GET['id'];
    //echo $id;

    $query = "DELETE FROM employee WHERE id='$id'";
    $data = mysqli_query($con, $query);
    echo "data deleted with id $data";
    header("Location: view.php");
 ?>
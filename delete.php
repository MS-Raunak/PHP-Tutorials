<?php
    include 'connect.php';

    //Getting id from url
    $id =  $_GET['id'];

    $query = "DELETE FROM car WHERE id='$id'";
    $deleted = mysqli_query($con, $query);

    if($deleted){
        header("Location: view.php");
    }
    else{
        header("Location: error.php");
    }
    
    mysqli_close($con);

?>
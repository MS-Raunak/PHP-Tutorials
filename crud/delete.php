<?php 
    include 'dbconnection.php';
    $id = $_GET['id'];
    echo "id: $id";
    $delQuery = "DELETE FROM student WHERE id='$id'";
    $deleted = mysqli_query($con, $delQuery) or die("Query Unsuccessfull");

    if($deleted){
        echo "Data deleted Successfully";
        header("Location: view.php");
    }
    else
        echo "Something error found!!";

?>

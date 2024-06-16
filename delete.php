<?php
include 'connect.php';
$id = $_GET['id'];
//echo "ID: $id";
$query = "DELETE FROM car WHERE id='$id'";
$deleted = mysqli_query($con, $query) or die("Not deleted");
if($deleted){
    header("Location: view.php");
}
?>


<?php
    
    include 'connect.php'; 
    if(!$con) 
        echo "DB NOT Connected";
    
    
    $id = $_GET['story_id'];
    echo "ID: $id";
    
    //DELETE FROM topics WHERE `topics`.`topic_id` = 8"
    $sql = "DELETE FROM topics WHERE `topics`.`topic_id`='$id'";
    $deleted = mysqli_query($con, $sql) or die("Query Unsuccessfull");

    if($deleted){
        
        header("Location: removestory.php");
    }
?>
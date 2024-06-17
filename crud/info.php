<?php
include 'dbconnect.php';
    if ($con) {
       $id = $_GET['id'];
       $sql = "SELECT * FROM employee WHERE id='$id'";
        $data = mysqli_query($con, $sql) or die("Query Unsuccess");

        $result = mysqli_fetch_array($data);
        echo "id: ". $result['id']. "<br>";
        echo "name: ". $result['ename']. "<br>";
        echo "salary: ". $result['salary']. "<br>";
        echo "designation: ". $result['designation']. "<br>";
    }

    
?>
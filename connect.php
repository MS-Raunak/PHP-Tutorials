<?php
    $con = mysqli_connect('localhost', 'root', '','crud');
    if(!$con) die("Connection failed..");

    /**
     * CREATING TABLE
        $query = "CREATE TABLE car(
            id   INT AUTO_INCREMENT PRIMARY KEY, 
            brand VARCHAR(20),
            price INT(10)
        )";

    $created = mysqli_query($con, $query);
    if($created) echo "Table Created Successfully";
    else echo "Error Creating Table";

    */
    
?>

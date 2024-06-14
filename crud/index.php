<?php  include 'dbconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
</head>
<body>
    <form action="" method="POST">
        <label>First Name</label>
        <input type="text" name="firstname" placeholder="enter firstname"><br><br>
        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="enter lastname"><br><br>
        <label>Age</label>
        <input type="number" name="age" placeholder="enter age"><br><br>
        <input type="submit" name="save_btn" value="Save">

        <button><a href="view.php">View</a></button>
    </form>

    <?php
        if(isset($_POST['save_btn'])){
           $fname = $_POST['firstname'];
           $lname = $_POST['lastname'];
           $age = $_POST['age'];

           $query = "INSERT INTO student(firstname, lastname, age) VALUES('$fname', '$lname', '$age')";
           $inserted = mysqli_query($con, $query) or die("Query Unsuccessfull");

           if($inserted) echo "data inserted successfully..";
           
        }
    
        //else echo "Something error found...";
        
    ?>
</body>
</html>
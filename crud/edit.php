<?php 
    include 'dbconnection.php'; 
    //Getting id from update button
    $id = $_GET['id'];
    //echo $id;
    $query = "SELECT * FROM student WHERE id= '$id' ";
    $data = mysqli_query($con, $query);
    $result = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
</head>
<body>
    <form action="" method="POST">
    <label>Student id</label>
        <input type="number" value="<?php echo $result['id'] ?>" name="id" readOnly=true><br><br>
        <label>First Name</label>
        <input type="text" value="<?php echo $result['firstname'] ?>" name="firstname" placeholder="enter firstname"><br><br>
        <label>Last Name</label>
        <input type="text" value="<?php echo $result['lastname'] ?>" name="lastname" placeholder="enter lastname"><br><br>
        <label>Age</label>
        <input type="number" value="<?php echo $result['age'] ?>" name="age" placeholder="enter age"><br><br>
        <input type="submit" name="update_btn" value="Update">
        <button><a href="view.php">Back</a></button>

    </form>

    <?php
        if(isset($_POST['update_btn'])){
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $age = $_POST['age'];

            $updateQuery = "UPDATE student SET firstname='$fname', lastname='$lname', age='$age' WHERE id='$id'";
            $data = mysqli_query($con, $updateQuery) or die("Query Unsuccessfull");
            if($data){
                echo "data updated successfully";
                header("Location: view.php");
            }
            else
                echo "Some error found!!";
        }
    ?>
</body>
</html>
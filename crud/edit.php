<?php 
    include "dbconnect.php";
    //if($con) echo "OK";
    $id =  $_GET['id'];
    //echo $id;
    $query = "SELECT * FROM employee WHERE id= '$id'";
    $data = mysqli_query($con, $query);

   $result =  mysqli_fetch_array($data);
   
    //echo $result['ename'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
        <h2>Update Employee Data</h2>
        <div class="form-container">
            <form action="" method="POST">
                <div class="input">
                    <label>Employee Id</label><br>
                    <input type="number" name="id" value="<?php echo $result['id'] ?>" readOnly>
                </div>

                <div class="input">
                    <label>Employee Name</label><br>
                    <input type="text" name="ename" value="<?php echo $result['ename'] ?>" >
                </div>

                <div class="input">
                    <label>Employee Salary</label><br>
                    <input type="number" name="salary" value="<?php echo $result['salary'] ?>">
                </div>
                <div class="input">
                    <label>Employee designation</label><br>
                    <input type="text" name="designation" value="<?php echo $result['designation'] ?>" required>
                </div>
        
                <input type="submit" value="Update" id="btn" name="update_btn">
                <button class="btn"><a href="view.php">Back</a></button>
                
            </form>

    <!--############### PHP ####################################-->
    <?php
        if(isset($_POST['update_btn'])){
            $name = $_POST['ename'];
            $sal = $_POST['salary'];
            $desig = $_POST['designation'];

            $query = "UPDATE employee SET ename='$name', salary='$sal', designation='$desig' WHERE id='$id' ";

            $updated = mysqli_query($con, $query);
            if($updated){
    ?>
                <script> alert("data updated successfully");</script>
                
    <?php       header("Location: view.php");
            }
            else echo "data not updated";
        }    
        //else echo "db not connected";
    ?>

        </div>
    </div>
</body>
</html>
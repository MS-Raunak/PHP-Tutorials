<?php include 'dbconnect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Employee Management System</h2>
        <div class="form-container">
            <form action="" method="POST">
                <div class="input">
                    <label>Employee Name</label><br>
                    <input type="text" name="ename" placeholder="enter name" required>
                </div>
                <div class="input">
                    <label>Employee Salary</label><br>
                    <input type="number" name="salary" placeholder="0.0">
                </div>
                <div class="input">
                    <label>Employee designation</label><br>
                    <!-- <input type="text" name="designation" placeholder="enter designation" required> -->
                     <select name="designation[]" id="" multiple>
                        <option value="Java_developer">Java developer</option>
                        <option value="Php_developer">Php developer </option>
                        <option value="Python_developer">Python developer</option>
                     </select>
                </div>
        
                <input type="submit" value="Save" id="btn" name="save_btn">
                <button class="btn"><a href="view.php">View</a></button>
                
            </form>

    <!--############### PHP ####################################-->
    <?php
        if(isset($_POST['save_btn'])){
            $name = $_POST['ename'];
            $sal = $_POST['salary'];
            //$desig[] = $_POST['designation'];
            $designations = implode(",", $_POST['designation']);

            $query = "INSERT INTO employee(ename, salary, designation) VALUES('$name', '$sal', '$designations')";

            $inserted = mysqli_query($con, $query);
            if($inserted){
    ?>
                <script> alert("data inserted successfully");</script>
                
    <?php
            }
            else echo "data not inserted";
        }    
        //else echo "db not connected";
    ?>

        </div>
    </div>
</body>
</html>
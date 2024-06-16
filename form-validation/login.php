<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="POST">
        enter email: <input type="email" name="email"><br> 
        enter password: <input type="password" name="upassword"><br> 
       <input type="submit" name="login_btn" value="Login"><br>
       <button><a href="register.php">Register</a></button>
    </form>

    <!-- PHP CODE -->
    <?php
        if(isset($_POST['login_btn'])){
            $email = $_POST['email'];
            $pwd = $_POST['upassword'];

            $query = "SELECT * FROM register WHERE email='$email' and upassword='$pwd'";
            $data = mysqli_query($con, $query) or die("Unsucessfull Query");
            $rows = mysqli_num_rows($data);
           
            if($rows > 0) {
                $row = mysqli_fetch_array($data);
                echo "Welcome ". $row['uname'];
            }
            else{
                echo "Invalid Credentials";
            }

    
        }


    ?>
</body>
</html>
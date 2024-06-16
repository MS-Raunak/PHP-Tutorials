<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <h2>Register User</h2>
    <form action="" method="POST">
        enter username: <input type="text" name="uname" placeholder="username" required><br>
        enter email: <input type="email" name="email" placeholder="email" required><br>
        enter password: <input type="password" name="upassword" placeholder="password" required><br>
        <input type="submit" name="register_btn" value="Register"><br>
        <button><a href="login.php">Login</a></button>
    </form>

    <!-- PHP CODE -->
    <?php
        if(isset($_POST['register_btn'])){
            $name = $_POST['uname'];
            $email = $_POST['email'];
            $password = $_POST['upassword'];

            $query = "INSERT INTO register(uname, email, upassword) VALUES('$name', '$email', '$password')";
            $inserted = mysqli_query($con, $query) or die("Query Unsuccessfull");

            if($inserted)
                echo "User Registered Successfully";
        }

    ?>
</body>
</html>
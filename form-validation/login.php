<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2 style="text-align: center">Login Form</h2>
    <form action="" method="POST">
    <table border="1" cellspacing="0" style="margin:auto; text-align:center">
        <tr>
            <th>Email:</th>
            <td><input type="email" name="email" placeholder="a@email" required><br></td>
        </tr> 
        <tr>
            <th>Password: </th>
            <td><input type="password" name="upassword" placeholder="abc#123" required><br></td>
        </tr>
        <tr >
            <th colspan="2">
            <input type="submit" name="login_btn" value="Login">
            <button><a href="register.php">Register</a></button>
            </th>
        </tr>
        </table>
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
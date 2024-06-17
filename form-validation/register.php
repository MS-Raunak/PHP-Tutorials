<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <h2 style="margin:auto; text-align:center">Register User</h2>
    
    <form action="" method="POST">
    <table border="1" cellspacing="0" style="margin:auto; text-align:center">
        <tr>
            <th>Username: </th>
            <td><input type="text" name="uname" placeholder="username" required><br></td>
        </tr>

        <tr>
            <th>Email:</th>
            <td><input type="email" name="email" placeholder="a@gmail.com" required><br></td>
        </tr> 

        <tr>
            <th>Gender:</th>
            <td>
                Male<input type="radio" name="gender" value="male">
                Female<input type="radio" name="gender" value="female"><br>
            </td>
        </tr>
        
        <tr>
            <th>Password: </th>
            <td><input type="password" name="upassword" placeholder="p123%" required><br></td>
        </tr>

        <tr>
            <th>Password:</th>
            <td><input type="password" name="cpassword" placeholder="p123%" required><br></td>
        </tr> 
        <tr >
            <th colspan="2">
            <input type="submit" name="register_btn" value="Register">
            <button><a href="login.php">Login</a></button>
            </th>
        </tr>
        </table>
    </form>
    

    <!-- PHP CODE -->
    <?php
        if(isset($_POST['register_btn'])){
            $name = $_POST['uname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $password = $_POST['upassword'];
            $cpassword = $_POST['cpassword'];

            if($password == $cpassword){

                $query = "INSERT INTO register(uname, gender, email, upassword, cpassword) VALUES('$name', '$gender', '$email', '$password', '$cpassword')";
                $inserted = mysqli_query($con, $query) or die("Query Unsuccessfull");

                //if($inserted) echo "User Registered Successfully";
    ?>
                <script>
                    alert("User Registered Successfully");
                </script>   
    <?php                     
            }
            else{
                echo "Password mismatched";
            }
        }

    ?>
</body>
</html>
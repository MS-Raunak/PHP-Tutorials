<?php
$inserted = false;
if(isset($_POST['name'])){
    // Set Connection Variable
    $server = "localhost";
    $username = "root";
    $password = "";

    //Create a Connection
    $Connection = mysqli_connect($server, $username, $password);

    //Check for connection success
    if(!$Connection){
        die("Connection to the database failed due to " . mysqli_connect_error());
    }

    //echo "Success connecting to the database";

    //Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sqlQuery = "INSERT INTO `phpform`.`form` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    //echo $sqlQuery;

    //Execute the query
    if($Connection-> query($sqlQuery) == true) {
        //echo "Successfully inserted";
        $inserted = true; //flag for successful insertion
    }
    else
        echo "Error: $sqlQuery <br> $Connection -> error";
    

    //close the db connection
    $Connection -> close();
}
?>

<!-- HTML File(FORM) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>Welcome to PHP Learning Form</h1>
        <p>Enter this details and submit this form to confirm your participation</p>
       <?php
            if($inserted==true){
                echo "<p style ='color: green;'>Thanks for your submission, you are welcome to the php learning group!!</p>";
            }
       ?>

        <div class="form-container">
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="enter your name">
                <input type="number" name="age" id="age" placeholder="enter your age">
                <input type="text" name="gender" id="gender" placeholder="enter your gender">
                <input type="email" name="email" id="email" placeholder="enter your email">
                <input type="number" name="phone" id="phone" placeholder="enter your phone number">
                <textarea name="other" id="other" rows="5" cols="7" placeholder="enter other description"></textarea>
                <button class="btn">Submit</button>
                <button class="btn">Reset</button>
            </form>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>
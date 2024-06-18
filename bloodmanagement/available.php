<?php
        include('connect.php');
        if(!$con){
            echo "DB Connection Failed!";
            exit;
        }

        $sql = "SELECT bloodgroup FROM doner";
        $data = mysqli_query($con, $sql) or die("Query Unsuccessfull");

        //$result = mysqli_fetch_Array($data);
        // echo  $result['bloodgroup'];

        //$sql1 = "SELECT count(dname) FROM doner WHERE bloodgroup=''";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Blood</title>
</head>
<body>
    <h3>Available Blood</h3>
    <ul>
        <?php
            while($result = mysqli_fetch_Array($data)){
        ?>
                <li> <?php echo $result['bloodgroup']; ?> </li>
        <?php
            }        

        ?>
    </ul>
    <button><a href="index.html">Back</a></button>
</body>
</html>
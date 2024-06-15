<?php include 'connect.php'; ?>


<html>
<head>
    <title>Insert(CAR</title>
</head>
<body>
    <form action="" method="POST">
        enter carname: <input type="text" name="brand" placeholder="enter brand">
        enter carname: <input type="number" name="price" placeholder="0.0">
        <input type="submit" value="save" name="save_btn">
        <button><a href="view.php">Get</a></button>
    </form>

    <?php
       if(isset($_POST['save_btn'])){
            //Getting Client Entered INPUT
            $brand = $_POST['brand'];
            $price = $_POST['price'];

            $query = "INSERT INTO car(brand, price) VALUES('$brand', '$price')";
            $inserted = mysqli_query($con, $query);

            if($inserted) echo "Data inserted successfully";
            else echo "Query Unsuccessfull!";
       }
       
       mysql_close($con);
    ?>
</body>
</html>
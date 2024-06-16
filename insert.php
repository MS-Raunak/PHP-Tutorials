<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
</head>
<body>
    <form action="" method="POST">
        enter brand: <input type="text" name="brand"><br>
        enter price: <input type="number" name="price"><br>
        <input type="submit" name="save_btn" value="Save">
        <button><a href="view.php">View</a></button>
    </form>
    <?php
        if(isset($_POST['save_btn'])) {
            $brand = $_POST['brand'];
            $price = $_POST['price'];

            $sql = "INSERT INTO car(brand, price) VALUES('$brand', '$price')";
            $inserted = mysqli_query($con, $sql) or die("Not inserted");
            if($inserted) echo "Data inserted successfully";
        }
    ?>
</body>
</html>
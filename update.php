<?php
include 'connect.php';
$id = $_GET['id'];
//  echo "ID: $id";
$query = "SELECT * FROM car WHERE id='$id'";
$data = mysqli_query($con, $query) or die("Query Failed..");
$row = mysqli_fetch_Array($data);
// echo "data:". $row['brand'];
// echo "ID:". $row['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form action="" method="POST">
        enter brand: <input type="text" name="brand" value="<?php echo $row['id']; ?>" readOnly><br>
        enter brand: <input type="text" name="brand" value="<?php echo $row['brand']; ?>"><br>
        enter price: <input type="number" name="price" value="<?php echo $row['price']; ?>"><br>
        <input type="submit" name="update_btn" value="Update">
        <button><a href="view.php">Back</a></button>
    </form>
    <?php
        if(isset($_POST['update_btn'])){
            $brand = $_POST['brand'];
        $price = $_POST['price'];

        $sql = "UPDATE car SET brand='$brand', price='$price' WHERE id='$id'";
        $updated = mysqli_query($con, $sql) or die("Not updated");
        header("Location: view.php");
        }
    ?>
</body>
</html>
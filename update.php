<?php
    include 'connect.php';
    //echo $_GET['id'];

    //Getting ID from Url
    $id = $_GET['id'];

    $query = "SELECT * FROM car WHERE id='$id'";
    $data = mysqli_query($con, $query);

    $row = mysqli_fetch_array($data);

    //Exist data: To Showing in updating Form   
    // $brand = $row['brand'];
    // $price = $row['price'];
    

?>

<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <form action="" method="POST">
            id: <input type="number" value="<?php echo $id; ?>" readOnly>
            brand:<input type="text" name="brand" value="<?php echo $row['brand'];  ?>">
            price: <input type="number" name="price" value="<?php echo $row['price']; ?>">
            <input type="submit" name="btn_update" value="Update">
            <button><a href="view.php">Back</a></button>
        </form>
        <?php
            if(isset($_POST['btn_update'])){
                //New data updated by client
                $brand = $_POST['brand'];
                $price = $_POST['price'];

                $query = "UPDATE car SET brand='$brand', price='$price' WHERE id='$id'";
                $updated = mysqli_query($con, $query);

                if ($updated) {
                    header("Location: view.php");
                    //echo "data updated successfully";
                }
                else{
                    header("Location : error.php");
                }
            }
            mysqli_close($con);
        ?>
    </body>
</html>
<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php 
            $sql = "SELECT * FROM car";
            $selected = mysqli_query($con, $sql) or die("Could not get data..");
            $rows = mysqli_num_rows($selected);
            if($rows > 0){
                while($row = mysqli_fetch_Array($selected)){
        ?>          <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['brand']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                  </tr>
        <?php   }
            }
        ?>
    </table>
    <button><a href="insert.php">Insert</a></button>
</body>
</html>
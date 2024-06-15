<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Data</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

    <?php
        $query = "SELECT * FROM car";
        $selected = mysqli_query($con, $query); //getting data as resultset
        $rows = mysqli_num_rows($selected); //converting data into rows

        if($rows > 0) {
            while($row = mysqli_fetch_assoc($selected)) { //we can also use mysqli_fetch_array($selected)
    ?>         <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['brand']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>

    <?php   }
        }
        mysql_close($con);
    ?>
     </table>
     <button><a href="insert.php">Insert</a></button>
</body>
</html>
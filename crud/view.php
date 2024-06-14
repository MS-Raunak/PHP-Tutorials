<?php include 'dbconnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <table border="1px" cellpadding="10px" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    

    <?php
        $query = "SELECT * FROM student";
        $data = mysqli_query($con, $query) or die("Query Unsucessfull");

        $resultset = mysqli_num_rows($data);
        if($resultset > 0) {
            while($row = mysqli_fetch_array($data)){
    ?>          <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>">update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
                    
                </tr>
    <?php   } ?>        
        
    <?php }
        else echo "NO Record Found!!";
     ?>
    </table>
    <a href="index.php">Home</a>
    
</body>
</html>
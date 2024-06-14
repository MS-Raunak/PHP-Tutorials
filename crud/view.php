<?php
   include "dbconnect.php"; 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="view-container">
        <h2>Dispaly All Data</h2>
        <div class="table-container">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Employee Id</th>
                    <th>Employee Name</th>
                    <th>Employee Salary</th>
                    <th>Employee Designation</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php 
                    $query = "SELECT * FROM employee";
                    $data = mysqli_query($con, $query);
                    $resultset = mysqli_num_rows($data);

                    if ($resultset > 0) {
                       while($row = mysqli_fetch_array($data)){
                ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['ename']; ?></td>
                                <td><?php echo $row['salary']; ?></td>
                                <td><?php echo $row['designation']; ?></td>
                                <td><a href="edit.php?id=<?php echo $row['id']; ?>">update</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>  
                <?php                      
                       }
                    }
                    else{
                ?>
                        <tr><th style="color:red">No data found</th></tr>  
                <?php } ?>          
                    
            </table>
        </div>
        <button class="btn"><a href="index.php">Home</a></button>
    </div>

</body>
</html>
<?php 
    include 'connect.php'; 
    if(!$con) {
        echo "DB NOT CONNECTED";
        exit;
    }
    $id = $_GET['story_id'];
    $sql = "SELECT * FROM topics WHERE topic_id='$id'";

    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_assoc($result);
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'nav.php'; ?>

    <div class="container-fluid bg-secondary">
        <h2 class="text-center p-3">UPDATE STORY HERE</h2>
        <div class="container vh-50 text-white p-3">
            <form method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Story Title</label>
                    <input type="text" class="form-control " id="title" value="<?php echo $row['topic_name']; ?>"
                        name="topic_name">
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label"> Story Description</label>
                    <input type="text" class="form-control" id="desc" name="topic_desc"
                        value="<?php echo $row['topic_desc']; ?>">
                </div>

                <div class=" mb-3">
                    <label for="path" class="form-label"> Story Image Path</label>
                    <input type="text" class="form-control" id="path" name="topic_image"
                        value="<?php echo $row['topic_image']; ?>">
                </div>
                <button type=" submit" class="btn btn-primary" name="update_btn">Update</button>
            </form>
        </div>
    </div>

    <?php 
             include 'footer.php'; 
             
             if (isset($_POST['update_btn'])) {
                $topic_name = $_POST['topic_name'];
                $topic_desc = $_POST['topic_desc'];
                $topic_img =  $_POST['topic_image'];
     
                $sql = "UPDATE topics SET topic_name='$topic_name', topic_image='$topic_img', topic_desc='$topic_desc' WHERE topic_id='$id'";
                $result = mysqli_query($con, $sql) or die("Query Unsuccessfull");
                
                if ($result) {
                     header("Location: updatestory.php");
                }
             }
        ?>
</body>

</html>
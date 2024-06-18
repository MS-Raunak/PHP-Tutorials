<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'connect.php'; ?>
    <?php include 'nav.php'; ?>

    <div class="container-fluid bg-secondary">
        <h2 class="text-center p-3">Add Story</h2>
        <div class="container vh-50 text-white p-3">
            <form method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Story Title</label>
                    <input type="text" class="form-control" id="title" name="topic_name">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"> Story Description</label>
                    <input type="text" class="form-control" id="desc" name="topic_desc">
                </div>

                <div class="mb-3">
                    <label for="path" class="form-label"> Story Image Path</label>
                    <input type="text" class="form-control" id="path" name="topic_desc" placeholder="/img/a.png">
                </div>

                <button type="submit" class="btn btn-primary" name="add_btn">Submit</button>
            </form>
        </div>
    </div>

    <?php 
        include 'footer.php'; 
        
        if (isset($_POST['add_btn'])) {
           $topic_name = $_POST['topic_name'];
           $topic_desc = $_POST['topic_desc'];
           $topic_img = $_POST['topic_image'];

           $sql = "INSERT INTO topics(topic_name, topic_desc, topic_image)VALUES('$topic_name', '$topic_desc', '$topic_img')";
        
           $result = mysqli_query($con, $sql) or die("Query Unsuccessfull");
           if ($result) {
                header("Location: index.php");
           }
        }
        
    ?>
</body>

</html>
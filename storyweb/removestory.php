<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remove Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'connect.php'; ?>
    <?php include 'nav.php'; ?>
    <div class="container-fluid">
        <!-- Cards -->
        <div class="container mb-3">
            <h1 class="text-center featureTitle mt-5">REMOVE STORY HERE</h1>
            <div class="row mt-5">
                <?php
            $sql = "SELECT * FROM topics";
            $result = mysqli_query($con, $sql);
            if($result){
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['topic_id'];
                $topic_img = $row['topic_image'];
                $topic_name = $row['topic_name'];
                $topic_desc = $row['topic_desc'];
                echo ' <div class="col-md-4 col-6">
                
          <div class="card mt-3" style="width: 18rem;">
              <img src="'.$topic_img.'" class="card-img-top" alt="image not found">
              <div class="card-body">
                <h5 class="card-title">'.$topic_name.'</h5>
                <p class="card-text">'.substr($topic_desc, 0, 50).'</p>
                <a href="remove.php?story_id='.$id.'" class="btn btn-primary">Remove Story</a>
              </div>
          </div>
        </div>';
              }
            }
        ?>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>
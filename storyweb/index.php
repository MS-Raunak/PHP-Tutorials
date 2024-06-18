<!doctype html>
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
    <!--############################################### SLIDER #######################################################-->
    <div class="container-fluid">
        <?php include 'nav.php'; ?>
        <div id="carouselExampleIndicators" class="carousel slide">
            <h1 class="text-center">KID STORIES</h1>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div><!-- Slider End -->

    <!--######################## CARD ################# -->
    <!-- Cards -->
    <div class="container mb-3">
        <h1 class="text-center featureTitle mt-5">Featured Stories</h1>
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
                <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
              </div>
          </div>
        </div>';
              }
            }
        ?>
        </div>
    </div><!-- Card End -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>
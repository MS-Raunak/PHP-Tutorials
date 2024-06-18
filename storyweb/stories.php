<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'connect.php'; ?>
    <?php include 'nav.php'; ?>

    <!-- PHP CODE -->
    <?php
        $id = $_GET['story_id'];
        $sql = "SELECT * FROM topics WHERE topic_id='$id'";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $topic_name = $row['topic_name'];
            $topic_image = $row['topic_image'];
            $topic_desc = $row['topic_desc'];
        }
    ?>


    <div class="container-fluid mt-1">
        <div class="jumbotron bg-warning rounded p-5">
            <div class="container">
                <h1 class="display-4"><?php echo $topic_name; ?></h1>
                <p><?php echo substr($topic_desc,0,300); ?></p>
                <p class="lead">
                    <button class="btn btn-dark">
                        <a class="text-light" href="#reading" role="button">Continue Reading</a>
                    </button>

                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide">
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
    </div>


    <div class="container mt-5" id="reading">
        <div class="jumbotron jumbotron-fluid bg-warning rounded  p-5 mb-3">
            <div class="container">
                <h1 class="display-4">Enjoy Reading</h1>
                <img src="$topic_image" alt="">
                <p><?php echo $topic_desc; ?>
                </p>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>
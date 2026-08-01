<?php

require_once "./traits/SeenMovie.php";
require_once "./classes/Genre.php";
require_once "./classes/Movie.php";
require_once "./classes/WatchedMovie.php";
require_once "./data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">OOP</h1>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie1->title; ?></h5>
                        <p class="card-text mb-1"><?php echo $movie1->director; ?></p>
                        <p class="card-text mb-2">
                            <?php echo implode(", ", array_map(fn($g) => $g->genreName, $movie1->genres)); ?>
                        </p>
                        <span class="badge <?php echo $movie1->getSeen() ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie1->getSeen() ? "Seen" : "Not Seen"; ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie2->title; ?></h5>
                        <p class="card-text mb-1"><?php echo $movie2->director; ?></p>
                        <p class="card-text mb-2">
                            <?php echo implode(", ", array_map(fn($g) => $g->genreName, $movie2->genres)); ?>
                        </p>
                        <span class="badge <?php echo $movie2->getSeen() ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie2->getSeen() ? "Seen" : "Not Seen"; ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie3->title; ?></h5>
                        <p class="card-text mb-1"><?php echo $movie3->director; ?></p>
                        <p class="card-text mb-2">
                            <?php echo implode(", ", array_map(fn($g) => $g->genreName, $movie3->genres)); ?>
                        </p>
                        <span class="badge <?php echo $movie3->getSeen() ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie3->getSeen() ? "Seen" : "Not Seen"; ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie4->title; ?></h5>
                        <p class="card-text mb-1"><?php echo $movie4->director; ?></p>
                        <p class="card-text mb-2">
                            <?php echo implode(", ", array_map(fn($g) => $g->genreName, $movie4->genres)); ?>
                        </p>
                        <span class="badge <?php echo $movie4->getSeen() ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie4->getSeen() ? "Seen" : "Not Seen"; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie5->title; ?></h5>
                        <p class="card-text mb-1"><?php echo $movie5->director; ?></p>
                        <p class="card-text mb-2">
                            <?php echo implode(", ", array_map(fn($g) => $g->genreName, $movie5->genres)); ?>
                        </p>
                        <span class="badge <?php echo $movie5->getSeen() ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie5->getSeen() ? "Seen" : "Not Seen"; ?>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
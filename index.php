<?php

trait SeenMovie
{
    public bool $seen = false;

    public function markAsSeen()
    {
        $this->seen = true;
    }
}

class Genre
{
    public string $genreName;

    function __construct(string $_genreName)
    {
        $this->genreName = $_genreName;
    }
}

class Movie
{
    public string $title;
    public string $director;
    public array $genres;

    function __construct(string $_title, string $_director, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
    }
}

class WatchedMovie extends Movie
{
    use SeenMovie;
}

$movie1 = new WatchedMovie("Inception", "Christopher Nolan", [new Genre("Sci-Fi"), new Genre("Thriller")]);
$movie1->markAsSeen();

$movie2 = new WatchedMovie("The Dark Knight", "Christopher Nolan", [new Genre("Action"), new Genre("Crime")]);
$movie2->markAsSeen();

$movie3 = new WatchedMovie("Interstellar", "Christopher Nolan", [new Genre("Sci-Fi"), new Genre("Drama")]);
$movie3->markAsSeen();

$movie4 = new WatchedMovie("Pulp Fiction", "Quentin Tarantino", [new Genre("Crime"), new Genre("Drama"), new Genre("Thriller")]);
$movie4->markAsSeen();

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
                        <span class="badge <?php echo $movie1->seen ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie1->seen ? "Seen" : "Not Seen"; ?>
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
                        <span class="badge <?php echo $movie2->seen ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie2->seen ? "Seen" : "Not Seen"; ?>
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
                        <span class="badge <?php echo $movie3->seen ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie3->seen ? "Seen" : "Not Seen"; ?>
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
                        <span class="badge <?php echo $movie4->seen ? 'bg-success' : 'bg-secondary'; ?>">
                            <?php echo $movie4->seen ? "Seen" : "Not Seen"; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
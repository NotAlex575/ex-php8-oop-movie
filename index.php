<?php
    require_once "./Models/Movie.php";
    require_once "./Models/Genre.php";
    require_once "./db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-12 col-md-4 col-3">

    </div>
    <h1>Lista film</h1>
    <div class="container my-5">
    <div class="row g-4 justify-content-center">
        <?php
            $movies = [$movie1, $movie2];
            foreach ($movies as $movie) {
                echo '
                <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-center">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Film: ' .$movie->name . '</h5>
                            <p class="card-text">Adatto ad un pubblico di: ' . $movie->seeTargetMovieAge() . '</p>
                            <p class="card-text">Genere: '.$movie->getGenreNames().'</p>
                            <p class="card-text fw-semibold">Prezzo: ' . $movie->price . '€</p>
                        </div>
                    </div>
                </div>';
            }
        ?>
    </div>
</div>
</body>
</html>
<?php

    class Genre{
        protected $genre1;
        protected $genre2;
        
        function __construct($genre1, $genre2){
            $this->genre1 = $genre1;
            $this->genre2 = $genre2;
        }

        function getGenre(){
            return $this->genre1.", ".$this->genre2;
        }
    }

    class Movie{
        public $name;
        public $targetMovieAge;
        public $price;
        protected $genre;

        function getGenreNames(){
            return $this->genre->getGenre();
        }

        function __construct($name, $targetMovieAge, Genre $genre, $price){
            $this->name = $name;
            $this->targetMovieAge;
            $this->genre = $genre;
            $this->price = $price;
        }

        public function seeTargetMovieAge(){
            if($this->targetMovieAge < 12){
                return "Bambini";
            }
            elseif($this->targetMovieAge < 18){
                return "Ragazzi";
            }
            else{
                return "Adulti";
            }
        }

    }
    $movie1Genre1 = new Genre("Avventura", "Animazione");
    $movie1Genre2 = new Genre("Azione", "Animazione");
    $movie1 = new Movie("Heidi - Una Nuova Avventura", 12,$movie1Genre1 ,6.90);
    $movie2 = new Movie("Chainsaw Man - Il film: La storia di Reze", 16, $movie1Genre2,8.90);

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
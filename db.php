<?php

$movie1Genre1 = new Genre("Avventura", "Animazione");
$movie1Genre2 = new Genre("Azione", "Animazione");
$movies = [
    new Movie("Heidi - Una Nuova Avventura", 12,$movie1Genre1 ,6.90),
    new Movie("Chainsaw Man - Il film: La storia di Reze", 16, $movie1Genre2,8.90)
];

$movies[0]->setDirector("Toby Schwarz");
$movies[1]->setDirector("Tatsuya Yoshihara");
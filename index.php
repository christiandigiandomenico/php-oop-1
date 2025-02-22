<?php

require 'db.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./style.css">
</head>

<body>

    <h1 class="text-center">Movies</h1>

    <div class="container-fluid d-flex gap-5 justify-content-center mt-5">

        <?php

        foreach ($movies as $movie) {

            echo '<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">' . $movie->nome . '</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">' . $movie->data . '</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">' . $movie->director->getFullDirector() . '</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">';
            foreach ($movie->genres as $genre) {
                echo $genre . ' ';
            }
            echo '</h6>
            <p class="card-text">' . $movie->descrizione . '</p>
        </div>
    </div>';
        }

        ?>

    </div>



    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
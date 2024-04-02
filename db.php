<?php

require './Models/movies.php';

$movie1 = new Movie("Hellraiser", 1987, "Mentre armeggia con una particolare scatola magica, un uomo apre involontariamente le porte di accesso ad una dimensione infernale, popolata da mostri sadomasochisti assetati di sangue.", ["Horror", "Thriller"], new Direction("Clive", "Barker", "Inglese"));
$movie2 = new Movie("Le casa", 1981, "Durante un weekend in una baita immersa nella foresta, alcuni amici risvegliano inconsapevolmente un temibile demone antico.", ["Horror", "Azione"], new Direction("Sam", "Raimi", "Americana"));
$movie3 = new Movie("L'armata delle Tenebre", 1992, "Ash viene catapultato nel 1300 D.C. per combattere un esercito di scheletri, resuscitati dal Libro Tibetano dei Morti, il Necromicon. Se vuole tornare a casa deve ritrovarlo; ad aiutarlo c'è la sua arma: una sega elettrica al posto del braccio.", ["Horror", "Azione"], new Direction("Sam", "Raimi", "Americana"));
$movie4 = new Movie("Non aprire quella porta", 1974, "Due fratelli decidono di andare in Texas per visitare la tomba del nonno insieme a tre amici. Sfortunatamente, una volta giunti sul posto, il gruppo si ritrova a dover sfuggire ad una famiglia di psicopatici.", ["Horror", "Azione", "Thriller"], new Direction("Tobe", "Hooper", "Americana"));

$movies = [

    $movie1,
    $movie2,
    $movie3,
    $movie4,

];

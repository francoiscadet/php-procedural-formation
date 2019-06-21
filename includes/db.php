<?php

$connection = mysqli_connect(
    "localhost",
    "formation",
    "PassPhp",
    "phpdeux"
);

    if (!$connection) {
        die('<strong> impossible de se connecter</strong><br>'.
        mysqli_connect_error());
    } else {
        echo "<strong> connexion reussie</strong><br>";
    }
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['favorite_movie'])) {
        $favoriteMovie = htmlspecialchars($_POST['favorite_movie']);
        echo "<h1>Your Favorite Movie Selection</h1>";
        echo "<p>Your favorite movie is: " . $favoriteMovie . "</p>";
    } else {
        echo "<h1>Your Favorite Movie Selection</h1>";
        echo "<p>No favorite movie selected.</p>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>This page can only be accessed via a POST request.</p>";
}

?>

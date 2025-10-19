<?php

$name = "Tom";
$fullName = "Tom Riddle";
$age = 18;
$movies = ["The Matrix", "Inception", "Interstellar", "The Dark Knight", "Fight Club"];

echo "Name: $name - ";
echo "Full Name: $fullName - ";
echo "Age: $age ";

function trueOrFalse($value) {
    if ($value < 18) {
        return "false";
    } else {
        return "true";
    }
}

?>

<h1>Welcome, <?php echo $fullName ?></h1>
<p>Are you an adult? <?php echo trueOrFalse($age); ?></p>
<h1>Your Favorite Movies:</h1>
<ul>
    <?php foreach ($movies as $movie): ?>
        <li><?php echo $movie; ?></li>
    <?php endforeach; ?>
</ul>
<form action="process.php" method="POST">
        <label for="favorite_movie">Select your favorite movie:</label>
        <select name="favorite_movie" id="favorite_movie">
            <?php foreach ($movies as $movie): ?>
                <option value="<?php echo $movie; ?>"><?php echo $movie; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Submit">
</form>

<?php

$name = "Tom";
$fullName = "Tom Riddle";
$age = 18;

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

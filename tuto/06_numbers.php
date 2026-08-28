<?php
// PHP Tutorial #6 - Numbers

// PHP can work with integers and decimal numbers

$radius = 10;
$pi = 3.14;

// Basic maths:
echo $radius + 5;
echo "<br>";

echo $radius - 5;
echo "<br>";

echo $radius * 2;
echo "<br>";

echo $radius / 2;
echo "<br>";

echo 10 % 3; // Modulus gives the remainder
echo "<br><br>";

// Order of operations works like normal mathematics
$result = (2 + 3) * 4;
echo $result;

echo "<br><br>";

// Increment and decrement:
$score = 10;
$score++;
echo $score; // 11

echo "<br>";

$score--;
echo $score; // 10

echo "<br><br>";

// Short assignment operators:
$number = 10;
$number += 5;
echo $number; // 15

echo "<br><br>";

// Useful number functions:
echo floor(3.9); // Rounds down
echo "<br>";

echo ceil(3.1); // Rounds up
echo "<br>";

echo pi(); // Returns the value of pi
?>
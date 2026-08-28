<?php
// PHP Tutorial #9 - Loops

// Loops repeat a block of code.

// FOR LOOP
// Good when we know how many times we want to repeat something.
for ($i = 0; $i < 5; $i++) {
    echo "For loop number: $i <br>";
}

echo "<br>";

// WHILE LOOP
// Repeats while a condition is true.
$i = 0;

while ($i < 5) {
    echo "While loop number: $i <br>";
    $i++;
}

echo "<br>";

// FOREACH LOOP
// Very useful for looping through arrays.
$names = ["Batrisyia", "Alif", "Aayra"];

foreach ($names as $name) {
    echo $name . "<br>";
}

echo "<br>";

// Foreach can also work with associative arrays.
$student = [
    "name" => "Batrisyia",
    "course" => "Creative Multimedia",
    "year" => 3
];

foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}
?>
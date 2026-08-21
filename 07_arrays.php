<?php
// PHP Tutorial #7 - Arrays

// An array stores multiple values in one variable.

// Indexed array:
$people = ["Batrisyia", "Alif", "Aayra"];

echo $people[0];
echo "<br>";
echo $people[1];

echo "<br><br>";

// Another way to create an array:
$fruits = array("Apple", "Banana", "Mango");

// Add a new item to the end of an array:
$fruits[] = "Grape";

// Print the whole array in a readable way:
print_r($fruits);

echo "<br><br>";

// Count how many items are in an array:
echo count($fruits);

echo "<br><br>";

// Associative arrays use named keys instead of number indexes.
$student = [
    "name" => "Batrisyia",
    "course" => "Creative Multimedia",
    "year" => 3
];

echo $student["name"];
echo "<br>";
echo $student["course"];

echo "<br><br>";

print_r($student);
?>
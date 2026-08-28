<?php
// PHP Tutorial #8 - Multidimensional Arrays

// A multidimensional array is an array that contains other arrays.

// Example: a list of students.
$students = [
    [
        "name" => "Batrisyia",
        "course" => "Creative Multimedia",
        "mark" => 90
    ],
    [
        "name" => "Alif",
        "course" => "Engineering",
        "mark" => 82
    ],
    [
        "name" => "Aayra",
        "course" => "Cybersecurity",
        "mark" => 88
    ]
];

// Access data from a multidimensional array:
echo $students[0]["name"];
echo "<br>";

echo $students[1]["course"];
echo "<br>";

echo $students[2]["mark"];

echo "<br><br>";

// Show the complete array:
print_r($students);
?>
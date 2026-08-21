<?php
// PHP Tutorial #5 - Strings

// A string is text written inside quotation marks

$firstName = "Batrisyia";
$lastName = "Safiya";

// Concatenation joins strings together
// In PHP, we use a dot (.) to concatenate strings
$fullName = $firstName . " " . $lastName;

echo $fullName;
echo "<br><br>";

// Double quotes can read variables inside the string
echo "My name is $firstName.";
echo "<br>";

// Single quotes normally display the text more literally
echo 'My name is $firstName.';
echo "<br><br>";

// Some useful string functions:
$message = "hello php";

echo strlen($message);        // Counts characters
echo "<br>";

echo strtoupper($message);   // Converts to uppercase
echo "<br>";

echo strtolower("HELLO PHP"); // Converts to lowercase
echo "<br>";

echo str_replace("php", "world", $message); // Replaces text
?>
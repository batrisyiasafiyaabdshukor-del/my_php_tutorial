<?php
// PHP Tutorial #10 - Booleans & Comparisons

// A boolean only has two possible values:
// true or false.

$isLoggedIn = true;
$isAdmin = false;

// Comparison operators compare values.

$age = 20;

var_dump($age > 17);   // true
echo "<br>";

var_dump($age < 20);   // false
echo "<br>";

var_dump($age >= 20);  // true
echo "<br>";

var_dump($age <= 20);  // true
echo "<br><br>";

// == checks whether values are equal.
var_dump(10 == "10");

echo "<br>";

// === checks both value AND data type.
var_dump(10 === "10");

echo "<br><br>";

// != means "not equal".
var_dump(10 != 5);

echo "<br><br>";

// String comparison:
$name1 = "Batrisyia";
$name2 = "Batrisyia";

var_dump($name1 == $name2);

// Notes:
// >   greater than
// <   less than
// >=  greater than or equal to
// <=  less than or equal to
// ==  equal value
// === equal value and equal data type
// !=  not equal
?>
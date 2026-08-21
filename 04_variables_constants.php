<?php
// PHP Tutorial #4 - Variables & Constants

// Variables store data.
// A PHP variable always starts with a $ sign.

$name = "Batrisyia";
$age = 20;

echo $name;
echo "<br>";
echo $age;
echo "<br><br>";

// We can change the value stored inside a variable.
$name = "Safiya";
echo $name;

echo "<br><br>";

// Constants are values that should not change.
// One way to create a constant is using define().
define("SITE_NAME", "My PHP Tutorial");

echo SITE_NAME;

// Notes:
// Variable: value can be changed.
// Constant: value is meant to stay the same.
?>
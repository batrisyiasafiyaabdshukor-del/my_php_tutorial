<?php

// PHP Tutorial #14 - Variable Scope

// Variable scope means where a variable can be accessed in our code.
// A variable created outside a function is called a GLOBAL variable.
// A variable created inside a function is called a LOCAL variable.



// LOCAL SCOPE


// $name is created inside the function.
// This means it can only be used inside this function.

function myFunc() {

    $name = 'mario';

    echo 'hello ' . $name;

}

myFunc();

echo '<br /><br />';



// GLOBAL SCOPE


// $name2 is created outside the function.
// It is therefore in the global scope.

$name2 = 'luigi';

function sayHello() {

    // Normally, a function cannot directly access
    // a variable created outside of it.

    global $name2;

    echo 'hello ' . $name2;

}

sayHello();

echo '<br /><br />';



// CHANGING A GLOBAL VARIABLE


// Using global also allows us to change
// the global variable from inside a function.

$name3 = 'yoshi';

function changeName() {

    global $name3;

    $name3 = 'toad';

}

changeName();

echo $name3;

echo '<br /><br />';



// PASSING VARIABLES INTO FUNCTIONS


// Another way is to pass a variable into a function
// as an argument instead of using global.

$name4 = 'peach';

function greet($name) {

    echo 'hello ' . $name;

}

greet($name4);

?>
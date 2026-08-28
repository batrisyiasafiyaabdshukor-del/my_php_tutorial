<?php

// PHP Tutorial #13 - Functions

// A function is a reusable block of code.
// We create a function once and can call it whenever we need it.


// BASIC FUNCTION


function sayHello() {
    echo 'Good morning!';
}

// Calling the function.
// The code inside the function only runs when we call it.

sayHello();

echo '<br /><br />';



// FUNCTION WITH A PARAMETER


// A parameter lets us send information into a function.
// $name will contain whatever value we give when calling the function.

function sayHelloTo($name) {
    echo 'Good morning ' . $name;
}

sayHelloTo('Batrisyia');

echo '<br /><br />';



// FUNCTION WITH MORE THAN ONE PARAMETER


// A function can accept multiple parameters.

function formatProduct($product) {
    echo $product['name'] . ' costs $' . $product['price'];
}

$product = [
    'name' => 'green shell',
    'price' => 10
];

formatProduct($product);

echo '<br /><br />';



// RETURNING A VALUE


// return sends a value back from a function.
// Instead of displaying the result inside the function,
// we can save the returned value into another variable.

function calculateTotal($price, $quantity) {

    $total = $price * $quantity;

    return $total;
}

$totalPrice = calculateTotal(10, 3);

echo 'Total price: $' . $totalPrice;

?>
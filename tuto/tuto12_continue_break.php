<?php

// PHP Tutorial #12 - Continue & Break

// continue and break are used inside loops.
// continue = skips the current loop and moves to the next one.
// break = completely stops the loop.


// PRODUCTS ARRAY

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];


// CONTINUE


// foreach loops through all the products.
//
// If the product name is 'red shell',
// continue will skip that product and go
// straight to the next product.

foreach ($products as $product) {

    if ($product['name'] == 'red shell') {
        continue;
    }

    echo $product['name'] . '<br />';
}


echo '<br />';


// BREAK


// break stops the entire loop.
//
// When PHP reaches 'gold coin',
// the loop will stop completely.

foreach ($products as $product) {

    echo $product['name'] . '<br />';

    if ($product['name'] == 'gold coin') {
        break;
    }
}

?>
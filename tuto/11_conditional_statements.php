<?php

// PHP Tutorial #11 - Conditional Statements

// Conditional statements are used to check conditions.
// if = runs when the condition is true
// elseif = checks another condition
// else = runs when the conditions above are false

$price = 20;

if ($price < 10) {
    echo 'the condition is met<br />';
} elseif ($price < 30) {
    echo 'elseif condition met<br />';
} else {
    echo 'condition not met<br />';
}

// An array of products.
// Each product has a name and a price.

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// Loop through every product in the array.
foreach ($products as $product) {

    // Only show products that cost less than 15.
    if ($product['price'] < 15) {
        echo $product['name'] . '<br />';
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Products</h1>

    <!--
        We can also use conditional statements inside HTML.
        foreach checks every product and if decides
        which products should be displayed.
    -->

    <ul>

        <?php foreach ($products as $product) { ?>

            <?php if ($product['price'] > 15) { ?>

                <li>
                    <?php echo $product['name']; ?>
                    - $<?php echo $product['price']; ?>
                </li>

            <?php } ?>

        <?php } ?>

    </ul>

</body>

</html>


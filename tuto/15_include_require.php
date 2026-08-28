<?php

// PHP Tutorial #15 - Include & Require

// include and require allow us to use code
// from another PHP file inside this file.

// This is useful because we do not need to
// repeat the same code on every page.

?>

<!DOCTYPE html>
<html>

<head>
    <title>Include & Require</title>
</head>

<body>

    <?php

    // INCLUDE
    // include loads another PHP file into this page.

    include('header.php');

    ?>

    <h2>Welcome!</h2>

    <p>This content is from tuto15_include_require.php.</p>

    <?php

    // REQUIRE works similarly to include.
    //
    // The important difference:
    // include = gives a warning if the file cannot be found,
    //           but PHP can continue running.
    //
    // require = gives an error if the file cannot be found
    //           and stops the script.

    // We are leaving this commented because header.php
    // has already been included above.

    // require('header.php');

    ?>

</body>

</html>
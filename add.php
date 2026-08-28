<?php

// VIDEO 17 - FORMS IN PHP

// $_GET is a PHP superglobal.
// It stores data that is sent through the URL using the GET method.

// This lets us see the data submitted from the form.
print_r($_GET);

?>

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>

    <!--
        The form sends the user's information to add.php.
        method="GET" means the submitted values will appear in the URL.
    -->

    <form class="white" action="add.php" method="GET">

        <label>Your Email:</label>
        <input type="text" name="email">

        <label>Pizza Title:</label>
        <input type="text" name="title">

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">

        <div class="center">
            <input
                type="submit"
                name="submit"
                value="Submit"
                class="btn brand z-depth-0"
            >
        </div>

    </form>

</section>

<?php include('templates/footer.php'); ?>
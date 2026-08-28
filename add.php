<?php

// VIDEO 18 - XSS ATTACKS

// XSS = Cross-Site Scripting.
// It can happen when user input is displayed as HTML without protection.

// htmlspecialchars() converts special HTML characters into safe text.
// Example:
// <script> becomes harmless text instead of being treated as HTML.

// We only display the submitted values if the form has been submitted.

if (isset($_GET['submit'])) {

    echo htmlspecialchars($_GET['email']);
    echo '<br />';

    echo htmlspecialchars($_GET['title']);
    echo '<br />';

    echo htmlspecialchars($_GET['ingredients']);
}

?>

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>

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
<!DOCTYPE html>
<html>

<head>
    <title>Ninja Pizza</title>

    <!-- Materialize CSS is used to style the project -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    >

    <style type="text/css">

        /* Custom colours for the Ninja Pizza website */
        .brand {
            background: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important;
        }

    </style>

</head>

<body class="grey lighten-4">

    <!--
        TUTORIAL 16 - PROJECT HEADER & FOOTER

        This header is stored in a separate file so we can
        reuse the same navigation bar on different pages.

        The header opens the HTML and body tags.
        footer.php will close them later.
    -->

    <nav class="white z-depth-0">

        <div class="container">

            <a href="index.php" class="brand-logo brand-text">
                Ninja Pizza
            </a>

            <ul id="nav-mobile" class="right hide-on-small-and-down">

                <li>
                    <a href="add.php" class="btn brand z-depth-0">
                    Add a Pizza
                </a>
                </li>

            </ul>

        </div>

    </nav>
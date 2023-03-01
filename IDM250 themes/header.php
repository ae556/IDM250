<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?>
    </title>
    <?php
    // Link - https://developer.wordpress.org/reference/functions/wp_head/
    // Plugins and WordPress core use this function to insert crucial elements into your document (e.g., scripts, styles, and meta tags).
    // Always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>

    <section class="header">


        <nav>
            <a href="index.html"><img src="./images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-close" onclick="hideMenu()"></i>


                <?php
                // Registered this menu in functions.php
                wp_nav_menu(['theme_location' => 'primary_menu']); ?>


            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>




</head>

<body <?php body_class(); ?>>
    <?php get_template_part('components/header');
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#FFCD00">

        <title><?php wp_title ( '' ); ?></title>
        <meta name="description" content="A collection of artist interpretations of emoji. Curated into an awesome hardcover book.">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="<?php bloginfo ( 'stylesheet_url' ); ?>">

        <!-- Esto lo haré desde functions.php -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> -->

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
    <?php the_field ( 'scripts_header','option'); ?>
        <header>

            <div class="center">

                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo ( 'name' ); ?></a></h1>

                <nav>

                    <h1 class="hidden">Main navigation</h1>
                    
                    <?php wp_nav_menu ( array
                    (
                        'theme_location' => 'main',
                        'container' => false
                    )); ?>

                </nav>

            </div>

        </header>
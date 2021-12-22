<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head class="no-js">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <?php

                    wp_nav_menu(
                        array(

                            'theme_location' => 'menu-1',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav ml-auto',                       
                        )
                    );
                ?>
            </div>
        </nav>
    </header>
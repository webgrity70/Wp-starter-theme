<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?> >

<header class="header">
    <div class="container-fluid bg-green topHeader py-3">
        <div class="container container1225">
            <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled socialList d-flex mb-0">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 text-right rightSide">
                    <a class="call" href="tel:+017878 7878"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" class="img-fluid mr-2"> (+01) 7878 7878</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid menuConF">
        <nav class="navbar navbar-expand-lg navbar-light container container1225">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button"  aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse" id="navbarSupportedContent">



                <?php

                    wp_nav_menu(
                        array(

                            'theme_location' => 'menu-1',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav',                       
                        )
                    );
                ?>

            </div>
        </nav>
    </div>
        
</header>




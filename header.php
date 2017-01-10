<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/superlist.css" rel="stylesheet" type="text/css" >

        <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

        <title>Superlist - Grid System</title>
    </head>


    <body class="">

        <div class="page-wrapper">

            <header class="header">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src=<?php echo get_stylesheet_directory_uri() . "/assets/img/logo.png"; ?> alt="Logo">
                                    <span>Superlist</span>
                                </a>
                            </div><!-- /.header-logo -->

                            <div class="header-content">
                                <div class="header-top">
                                    <div class="header-search">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div><!-- /.header-search -->

                                    <ul class="header-nav-social social-links nav nav-pills">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul><!-- /.header-nav-social -->

                                    <ul class="header-nav-secondary nav nav-pills">
                                        <li><a href="wp-admin">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </div><!-- /.header-top -->

                                <div class="header-bottom">
                                    <div class="header-action">
                                        <a href="listing-submit.html" class="header-action-inner" title="Add Listing" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-plus"></i>
                                        </a><!-- /.header-action-inner -->
                                    </div><!-- /.header-action -->
                                    <?php
                                    $menu = wp_get_nav_menu_object("Menu");
                                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                                    ?>
                                    <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">

                                        <?php
                                        foreach ($menu_items as $element) :
                                            ?>
                                            <li>
                                                <a href="<?php echo $element->url; ?>">
                                                    <?php echo $element->title; ?>
                                                </a>    
                                            </li>

                                            <?php
                                        endforeach;
                                        ?>
                                    </ul>

                                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div><!-- /.header-bottom -->
                            </div><!-- /.header-content -->
                        </div><!-- /.header-inner -->
                    </div><!-- /.container -->
                </div><!-- /.header-wrapper -->
            </header><!-- /.header -->

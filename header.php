<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">

    <!-- header -->
    <header class="header bg-dark">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-6 col-lg-2">
                    <div class="logo">
                        <a href="<?php home_url(); ?>" class="navbar-brand">
                            <?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }

                            ?>
                        </a>
                    </div>


                </div>
                <div class="col-6 col-lg-10">
                    <div class="d-flex justify-content-end ">
                        <nav class="primary__nav d-none d-lg-block">

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'topmenu'
                            ))
                            ?>
                        </nav>
                        <!-- mobile menu -->
                        <div>
                            <button type="button" class="menubar d-lg-none">
                                <span class="fa-solid fa-bars"></span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->
    <!-- popupmenu -->
    <div class="popup-menu">
        <div class="close-menu text-end me-4 mt-4">
            <button type="button">
                <span class="fa-solid fa-close"></span>
            </button>
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'topmenu'
        ))
        ?>

    </div>
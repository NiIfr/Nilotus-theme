<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
</head>
<body>
<!--Start Header-->

<div class="top-head">
    <div class="top container">
        <div class="menu-top">
            <?php wp_nav_menu(array('theme_location' => 'top_menu')); ?>
        </div>

        <div class="contact-me">
            <span>09300822695</span>
            <span class="icon-container">
            <svg class="icon">
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#calling"></use>
            </svg>
          </span>
            <span>info@niloo.com</span>
            <span class="icon-container">
            <svg class="icon">
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#mail"></use>
            </svg>
          </span>
        </div>
    </div>
</div>
<div class="sticky-head">
    <div class="sticky container">
        <a class="nav-logo" href="#">
            <div id="progress">
                <img class="progress-value" src="<?= get_template_directory_uri(); ?>/assets/images/logo.jpg" alt=""/>
            </div>
        </a>

        <!--Start Responsive Menu-->
        <div class="humber-menu">
            <div class="nav__toggler">
                <div class="bar bar-one"></div>
                <div class="bar bar-two"></div>
                <div class="bar bar-three"></div>
            </div>

            <div id="mySidenav" class="sidenav">
                <a class="closebtn">&times;</a>

                <ul>
                    <li><a class="nav-item" href="#">خانه</a></li>
                    <li><a class="nav-item" href="#">آموزش</a></li>
                    <li><a class="nav-item" href="#">فروشگاه</a></li>
                    <li><a class="nav-item" href="#">وبلاگ</a></li>
                    <li><a class="nav-item" href="#">درباره من</a></li>
                    <li><a class="nav-item" href="#">تماس با من</a></li>
                </ul>

            </div>
        </div>
        <!--End Responsive Menu-->

        <nav class="navbar">
            <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
        </nav>
        <div class="login">
            <a href="#"
            ><span class="icon-container">
              <svg class="icon">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#search"></use>
              </svg>
            </span>
            </a>
            <a href="#"
            ><span class="icon-container">
              <svg class="icon">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#buy"></use>
              </svg>
            </span>
            </a>

            <a href="#"
            ><span class="icon-container">
              <svg class="icon">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#profile"></use>
              </svg>
            </span>
            </a>
        </div>
    </div>
</div>


<!--End Header-->
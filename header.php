<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">

        <div id="site-title">
            <?php
            the_custom_logo();
            ?>
        </div>

        <nav id="menu">
            <?php
            wp_nav_menu();
            ?>
        </nav>

    </header>
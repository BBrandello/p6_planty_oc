<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Syne&display=swap" rel="stylesheet">
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
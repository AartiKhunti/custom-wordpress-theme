<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header" style="display:none">
        <div class="container">
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
            <p class="site-description"><?php bloginfo('description'); ?></p>
            <!-- Add your custom header content here -->
        </div>
    </header>


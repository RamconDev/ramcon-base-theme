<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">

    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <span>Navbar</span>
            </div>
        </div>
    </header>

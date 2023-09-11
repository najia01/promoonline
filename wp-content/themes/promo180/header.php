<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PROMO 180</title>
    
    <?php 
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('lineicons', 'https://cdn.lineicons.com/2.0/LineIcons.css');
    wp_head(); ?>

</head>

<body>

   
        <!-- *-*-*-*-*-*HEADER*-*-*-*-*-* -->
        <header>

            <div id="logoBurger" >
                <a href="./index.php"><img id="logo" src="<?php echo get_template_directory_uri()?>/asset/img/logo.png" alt="logo"></a>
                <img id="menuBurger" src="<?php echo get_template_directory_uri()?>/asset/img/menu.png" alt="menu">
            </div>
            <nav>
                <?php wp_nav_menu(array('theme_location' =>'main_menu'
                )) ?>
            </nav>

        </header>
 <main>
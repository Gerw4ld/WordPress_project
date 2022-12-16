<!DOCTYPE html>
<html>

<head>

    <?php
    // for hooks and adding standards in wp-wordpress scripts
    wp_head(); ?>

</head>


<body <?php
//wordpress can add in its own classes
body_class(); ?>>


<header class='sticky-top'>

    <div class="conatiner">
        <?php wp_nav_menu(
            array(
                'theme_location ' => 'top_menu',
                'menu_class' => 'navigation'
            )
        ); ?>
    </div>

</header>


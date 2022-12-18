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


<header>
    <div class="container">
        <?php wp_nav_menu(
            array(
                'theme_location ' => 'top_menu',
//                'menu'=> 'Top Menu',
                'menu_class' => 'top_menu'
            )
        ); ?>
    </div>


</header>


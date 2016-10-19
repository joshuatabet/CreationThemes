<?php

add_theme_support('post-thumbnails');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}

add_action('init', 'register_my_menus');
function bloginfo( $show = '' ) {
    echo get_bloginfo( $show, 'display' );
}
?>

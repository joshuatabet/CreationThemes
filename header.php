<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NIKE</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>
<body>

<div class="container">
 <nav>
    <img src="http://localhost:8888/wordpress/wp-content/themes/CreationThemes/image/nike_pizza.png" style="width: 50px;" alt="">

   
        <?php $defaults = array(
            'theme_location' => '',
            'menu' => 'menu-general',
            'container' => '',
            'container_class' => 'navbar navbar-default navbar-fixed-top',
            'container_id' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul class="nav navbar-nav navbar-right" style="padding:0 10px 0 10px">%3$s</ul>',
            'depth' => '',
            'walker' => ''
        );
        wp_nav_menu($defaults);
        ?>
    </nav>
</div>
		


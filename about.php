<?php
/**
* Template Name: ABOUT
*/
get_header();
?>

<?php 

if (have_posts()) : while(have_posts()) : the_post();


	the_title();
	the_content();
	the_post_thumbnail();
	the_excerpt();
	the_permalink();


endwhile; endif,


?>


<?php

get_footer();
?>
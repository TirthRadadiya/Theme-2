<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_parts('template-parts/post/content');
    }
}

?>

<?php get_footer(); ?>
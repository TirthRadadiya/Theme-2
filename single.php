<?php get_header(); ?>

<div id="primary" class="content-area" › <main id="main" class="site-main">
    <?php
    while (have_posts()) {
        the_post();
        get_template_parts('template-parts/post/content');

        // If comments are open
        if (comments_open() && get_comments_number()) {
            comments_template();
        }
    } ?>
    </main>

    <?php get_sidebar(); ?>
</div>
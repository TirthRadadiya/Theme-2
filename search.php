<?php get_header(); ?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_parts('template-parts/page/content', 'search');
            }

            echo paginate_links(array(
                'prev_text' => esc_html__('Prev'),
                'next_text' => esc_html__('Next')
            ));
        } else {
            get_template_parts("template-parts/page/content", 'none');
        }

        ?>
    </main>
</div>

<?php get_footer(); ?>
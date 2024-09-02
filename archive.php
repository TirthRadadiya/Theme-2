<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) { ?>

            <header class="archive-page-header">
                <?php the_archive_title('<h1 class="archive-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>')
                    ?>
            </header>
            <?php
            while (have_posts()) {
                the_post();
                get_template_parts('template-parts/post/content');
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
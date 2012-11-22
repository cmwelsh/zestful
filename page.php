<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php
        foreach (Zesty::query() as $p) :
            get_template_part('content', 'page');
            comments_template('', true);
        endforeach;
        ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

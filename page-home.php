<?php
/*
Template Name: Page: Home
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

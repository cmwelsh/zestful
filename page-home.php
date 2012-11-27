<?php
/*
Template Name: Page: Home
*/
get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php foreach (Zesty::query() as $post) : ?>
            <?php get_template_part('content', 'page'); ?>
            <?php comments_template('', true); ?>
        <?php endforeach; ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

<?php

function zesty_child_init() {
    // Adds RSS feed link to <head>
    //add_theme_support('automatic-feed-links');

    // Enable post thumbnail support
    //add_theme_support('post-thumbnails');

    // Load child theme snippets
    Zesty::load_snippet('acf-codes', array('optional' => true));
    Zesty::load_snippet('require-plugins');
    Zesty::load_snippet('menus');
    Zesty::load_snippet('scripts');
    Zesty::load_snippet('image-sizes');
    Zesty::load_snippet('widgets');
}
add_action('after_setup_theme', 'zesty_child_init', 11);

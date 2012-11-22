<?php
namespace Snippet;

use Zesty;

class Scripts {
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
    }

    public function wp_enqueue_scripts() {
        // Load script dependencies - these should not affect the document
        wp_enqueue_script('jquery');

        // The main entry point script is where you wire everything together
        Zesty::enqueue_script('zesty-entry', 'entry');
    }
}

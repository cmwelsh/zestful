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

        // Add jQuery plugins to plugins.js
        // or add a new line for them in their own file
        Zesty::enqueue_script('zesty-plugins', 'plugins.js');

        // The main.js entry point script is where you wire everything together
        Zesty::enqueue_script('zesty-main', 'main.js');
    }
}

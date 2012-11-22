<?php
namespace Snippet;

use Exception;

class Require_Plugins {
    public function __construct() {
        // Don't require any plugins on the admin area
        if ($this->is_login_or_admin_page()) {
            return;
        }

        // List required plugins
        $plugins = array(
            //'Advanced Custom Fields' => 'get_field',
        );

        // Check availability of required plugins with function_exists
        foreach ($plugins as $plugin => $function_name) {
            if (!function_exists($function_name)) {
                throw new Exception("{$plugin} is not enabled");
            }
        }
    }
    protected function is_login_or_admin_page() {
        $is_login_page = in_array($GLOBALS['pagenow'], array(
            'wp-login.php',
            'wp-register.php',
        ));
        if ($is_login_page or \is_admin()) {
            return true;
        }
        else {
            return false;
        }
    }
}
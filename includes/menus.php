<?php

namespace Snippet;

class Menus {
    public function __construct() {
        register_nav_menu('primary', 'Primary Menu');
        register_nav_menu('footer', 'Footer Menu');
    }
}

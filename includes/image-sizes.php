<?php
namespace Snippet;

class Image_Sizes {
    public function __construct() {
        // Blog post featured image
        //set_post_thumbnail_size(745, 9999);

        // Custom image sizes

        // max width 600px, unlimited height
        //add_image_size('custom-no-crop', 600, 9999);
        // max width 600px, max height 400px
        //add_image_size('custom-crop', 600, 400);
        // crops image to exactly 600px by 400px
        //add_image_size('custom-crop-exact', 600, 400, true);
    }
}

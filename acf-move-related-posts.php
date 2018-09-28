<?php
/*
Plugin Name: Advanced Custom Fields: Move Related Posts for WordPress
Plugin URI: https://github.com/log1x/acf-move-related-posts
Description: A simple ACF Field that moves the Related Posts for WordPress metabox to the location of this field.
Version: 1.0.0
Author: Log1x
Author URI: https://log1x.com

License: MIT License
License URI: http://opensource.org/licenses/MIT
*/

namespace Acf\Field\MoveRelatedPosts;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('init')) {
    class init
    {
        /**
         * Construct
         */
        public function __construct()
        {
            $this->settings = [
                'version' => '1.0.0',
                'url'     => plugin_dir_url(__FILE__),
                'path'    => plugin_dir_path(__FILE__)
            ];

            load_plugin_textdomain('acf-move-related-posts', false, plugin_basename(dirname(__FILE__ )) . '/resources/lang');
            add_action('acf/include_field_types', [$this, 'fields']);
            add_action('acf/register_fields', [$this, 'fields']);
        }


        /**
         * Include our ACF Field Types
         *
         * @param  integer $version
         * @return void
         */
        public function fields($version = 5)
        {
            include_once('fields/field.php');
        }
    }

    // Initialize
    new init();
}

<?php
/*
Plugin Name: Block for Font Awesome
Plugin URI: https://getbutterfly.com/wordpress-plugins/block-for-font-awesome/
Description: Display a Font Awesome 5 icon in a Gutenberg block.
Version: 1.0.2
Author: Ciprian Popescu
Author URI: https://getbutterfly.com/
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Font Awesome Free (c) (https://fontawesome.com/license)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

if (!function_exists('add_filter')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');

    exit();
}

function getbutterfly_fa_enqueue() {
    wp_enqueue_script('fa5', 'https://use.fontawesome.com/releases/v5.9.0/js/all.js', [], '5.9.0', true);
}
add_action('wp_enqueue_scripts', 'getbutterfly_fa_enqueue');

require_once 'block/index.php';

add_action('init', 'getbutterfly_fa_block_init');

add_filter('block_categories', 'getbutterfly_block_categories', 10, 2);
add_action('enqueue_block_editor_assets', 'getbutterfly_fa_block_enqueue');

add_shortcode('fa', 'getbutterfly_fa_block_render');

<?php
/*
Plugin Name: QuBic Globus
Plugin URI:
Description: Puts content in every place you want on your site. Is an improvement of text widget.
Version: 0.1
Author: MarcDaBa
Author URI:
License: GPLv2 or later
*/

/*
  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

define( 'QBC_GLOBUS_VERSION', '0.1' );
define( 'QBC_GLOBUS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'QBC_GLOBUS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'QBC_GLOBUS_TEXT_DOMAIN', 'QuBic_Globus' );

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
    exit;
}

load_plugin_textdomain( QBC_GLOBUS_TEXT_DOMAIN, false, QBC_GLOBUS_PLUGIN_URL . '/languages' );

/* Set up the post types. */
add_action( 'init', 'QuBicGlobus_register_post_types' );


/**
 * Registers post types
 * @since 0.1
 */
function QuBicGlobus_register_post_types() {

    /* Set up the arguments for the ‘music_album’ post type. */
    $globus_args = array(
            'public' =>  true,
            'query_var' =>  'globus',
            'rewrite' =>  array(
                    'slug' =>  'globus',
                    'with_front' =>  false,
            ),
            'supports' =>  array(
                    'title',
            ),
            'labels' =>  array(
                    'name' =>  __('Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'singular_name' =>  __('Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'add_new' =>  __('Add New Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'add_new_item' =>  __('Add New Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'edit_item' =>  __('Edit Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'new_item' =>  __('New Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'view_item' =>  __('View Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'search_items' =>  __('Search Globus',QBC_GLOBUS_TEXT_DOMAIN),
                    'not_found' =>  __('No Globus Found',QBC_GLOBUS_TEXT_DOMAIN),
                    'not_found_in_trash' =>  __('No Globus Found In Trash',QBC_GLOBUS_TEXT_DOMAIN),
            ),
    );

    register_post_type( 'globus', $globus_args );
}
?>

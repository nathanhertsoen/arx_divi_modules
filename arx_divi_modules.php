<?php
/*
Plugin Name: Arx Divi Modules
Plugin URI:  
Description: Divi modules developed by Arexpo Web Agency
Version:     1.0.0
Author:      Herts. Nathan
Author URI:  
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: arx-arx_divi_modules
Domain Path: /languages

Arx Divi Modules is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Arx Divi Modules is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Arx Divi Modules. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'arx_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function arx_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/ArxDiviModules.php';
}
add_action( 'divi_extensions_init', 'arx_initialize_extension' );
endif;

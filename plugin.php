<?php
/**
 * Plugin Name: Revival Core Functionality
 * Plugin URI: https://github.com/MattRyanCo/revival-core-functionality
 * Description: This contains all your site's core functionality so that it is theme independent. Customized for capwebsolutions.com
 * Version: 1.1.1
 * Author: Cap Web Solutions
 * Author URI: https://capwebsolutions.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * Github Plugin URI: https://github.com/MattRyanCo/revival-core-functionality/
 *
 */

// Plugin Directory
define( 'CWS_DIR', dirname( __FILE__ ) );

// General
include_once( CWS_DIR . '/lib/functions/general.php' );

// WooCommerce Tweaks
include_once( CWS_DIR . '/lib/functions/wootweaks.php' );
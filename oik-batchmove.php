<?php
/*
Plugin Name: oik batchmove
Plugin URI: http://www.oik-plugins.com/oik-plugins/oik-batchmove
Description: Batch change post categories or published date
Version: 1.0
Author: bobbingwide
Author URI: http://www.bobbingwide.com
License: GPL2

    Copyright 2013 Bobbing Wide (email : herb@bobbingwide.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/

/**
 * Implement "oik_admin_menu" action for oik-batchmove
 */
function oik_batchmove_admin_menu() {
  // oik_register_plugin_server( __FILE__ );
  oik_require( "admin/oik-batchmove.php", "oik-batchmove" );
  oik_batchmove_lazy_admin_menu();
}

/**
 * Implement "admin_notices" action for oik-batchmove" 
 */ 
function oik_batchmove_activation() {
  static $plugin_basename = null;
  if ( !$plugin_basename ) {
    $plugin_basename = plugin_basename(__FILE__);
    add_action( "after_plugin_row_" . $plugin_basename, __FUNCTION__ );   
    require_once( "admin/oik-activation.php" );
  }  
  $depends = "oik:2.0";
  oik_plugin_lazy_activation( __FILE__, $depends, "oik_plugin_plugin_inactive" );
}

/**
 * Initialisation when the plugin file is loaded
 */
function oik_batchmove_plugin_loaded() {
  add_action( "oik_admin_menu", "oik_batchmove_admin_menu" );
  add_action( "admin_notices", "oik_batchmove_activation" );
}

oik_batchmove_plugin_loaded();





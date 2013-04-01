<?php
/**
 * Plugin Name: WPE No Object Cache Flush
 * Description: Prevents the Object Cache from being purged on login/logout. By extentsion, prevents transients on the site from being cleared when someone logs in or logs out.
 * Version: 1.0
 * Author: Jeremy Pry <jeremy@wpengine.com>
 * Author URI: http://jeremypry.com
 * License GPL3
 */

if ( has_action( 'login_head', 'wp_cache_flush' ) ) {
    remove_action( 'login_head', 'wp_cache_flush' );
}
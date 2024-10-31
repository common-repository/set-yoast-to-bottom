<?php
/*
Plugin Name: Set Yoast to Bottom
Description: Set Yoast meta box priority as low, after custom fields.
Version:     1.0
Author:      John Spellman
*/

if (!defined('ABSPATH')) {
  exit;
} // Exit if accessed directly

add_filter( 'wpseo_metabox_prio', 'yoasttobottom' );
function yoasttobottom() {
	return 'low';
}
<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt's shortcode for social media sharing with Monarch
 * Description:       Provides the shortcode [et_social_share] for adding Monarch's social medi sharing buttons.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined('ABSPATH') || die;

add_shortcode( 'et_social_share', function() {
  global $et_monarch;
  if ($et_monarch) {
    return $et_monarch->generate_inline_icons();	
  }
} );

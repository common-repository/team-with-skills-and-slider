<?php

/*
  Plugin Name: Team with Skills and Slider
  Plugin URI: https://www.wordpress.org/downloads/team-with-skills-slider/
  Description: Team with Skills and Slider is a powerful &amp; robust but easy to represent your team/staff members and their profiles with animated &amp; beautiful styled descriptions, skills &amp; links to social media.
  Author: Sk Abul Hasan
  Author URI: http://www.twssart.org/
  Version: 1.2
 */
if (!defined('ABSPATH'))
   exit;

define('twss_6310_plugin_url', plugin_dir_path(__FILE__));
define('twss_6310_plugin_dir_url', plugin_dir_url(__FILE__));
define ( 'TWSS_6310_PLUGIN_CURRENT_VERSION', 1.2 );

add_shortcode('twss_team_skills_slider', 'twss_team_with_skills_and_slider_shortcode');

function twss_team_with_skills_and_slider_shortcode($atts)
{
   extract(shortcode_atts(array('id' => ' ',), $atts));
   $ids = (int) $atts['id'];

   ob_start();
   include(twss_6310_plugin_url . 'shortcode.php');
   return ob_get_clean();
}


add_action('admin_menu', 'team_with_skills_and_slider_menu');

function team_with_skills_and_slider_menu()
{
  $options = twss_6310_get_user_roles();
   add_menu_page('Team with Skills and Slider', 'Team', $options, 'twss-team-with-skills-slider', 'twss_6310_home', 'dashicons-id-alt', 20);
   add_submenu_page('twss-team-with-skills-slider', 'Team with Skills and Slider', 'All Team',  $options, 'twss-team-with-skills-slider', 'twss_6310_home');
   add_submenu_page('twss-team-with-skills-slider', 'Template 01-10', 'Template 01-10', $options, 'twss-template-01-10', 'twss_template_01_10');
   add_submenu_page('twss-team-with-skills-slider', 'Template 11-20', 'Template 11-20', $options, 'twss-template-11-20', 'twss_template_11_20');
   add_submenu_page('twss-team-with-skills-slider', 'Manage Members', 'Manage Members', $options, 'twss-team-with-skills-slider-team-member', 'twss_team_6310_team_member');
   add_submenu_page('twss-team-with-skills-slider', 'Manage Category', 'Manage Category', $options, 'twss-team-with-skills-slider-category', 'twss_team_6310_category');
   add_submenu_page('twss-team-with-skills-slider', 'Manage Social Icons', 'Manage Social Icons', $options, 'twss-team-with-skills-slider-social-icon', 'twss_team_6310_icon');
   add_submenu_page('twss-team-with-skills-slider', 'Settings', 'Settings', 'manage_options', 'twss-team-with-skills-slider-settings', 'twss_team_6310_settings'); 
   add_submenu_page('twss-team-with-skills-slider', 'How to use', 'How to use', $options, 'twss-team-with-skills-slider-use', 'twss_team_6310_how_to_use');
   add_submenu_page('twss-team-with-skills-slider', 'WpMart Plugins', 'WpMart Plugins', $options, 'twss-6310-wpmart-plugins', 'twss_6310_wpmart_plugins');
}

function twss_6310_home()
{
   global $wpdb;
   wp_enqueue_style('twss-6310-style', plugins_url('assets/css/style.css', __FILE__));

   $style_table = $wpdb->prefix . 'twss_6310_style';
   include twss_6310_plugin_url . 'header.php';
   include twss_6310_plugin_url . 'home.php';
}

include twss_6310_plugin_url . 'template-menu.php';


add_action('wp_ajax_twss_6310_team_member_info', 'twss_6310_team_member_info');

function twss_my_enqueue()
{
   wp_enqueue_script('ajax-script', plugins_url('assets/js/ajaxdata.js', __FILE__), array('jquery'));
   wp_localize_script('ajax-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'twss_my_enqueue');

if (is_admin()) {
   add_action('wp_ajax_twss_6310_team_member_details', 'twss_6310_team_member_details');
} else {
   add_action('wp_ajax_nopriv_twss_6310_team_member_details', 'twss_6310_team_member_details');
}

add_action('wp_ajax_nopriv_twss_6310_team_member_details', 'twss_6310_team_member_details');

register_activation_hook(__FILE__, 'twss_team_with_skills_and_slider_install');
include_once(twss_6310_plugin_url . 'settings/helper/functions.php');

function twss_ajax_enqueue()
{
   wp_enqueue_script('twss-ajax-script', plugins_url('assets/js/ajaxdata.js', __FILE__), array('jquery'));
   wp_localize_script('twss-ajax-script', 'twss_6310_ajax_object', array('twss_ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'twss_ajax_enqueue');
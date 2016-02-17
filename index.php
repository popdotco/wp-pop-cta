<?php
/**
* Plugin Name: POP! Call to Action Plugin for Wordpress
* Plugin URI: http://opensource.pop.co/wp-pop-cta/
* Description: A plugin to create reusable custom call to action sections to your pages and posts by adding a simple shortcode. Perfect for helping boost conversions.
* Version: 1.0
* Author: POP.co
* Author URI: https://pop.co
* License: MIT
*/

class POP_CTA_Bar {

    public $pluginDir;
    public $pluginUrl;

    public function __construct()
    {
        $this->pluginDir = rtrim(__DIR__, '/');
        $this->pluginUrl = plugins_url('', __FILE__);
        $this->pluginUrl = rtrim($this->pluginUrl, '/');

        add_action('init', array(&$this, 'add_pop_cta_shortcode'));
    }

    public function add_pop_cta_shortcode()
    {
        if (current_user_can('edit_posts') &&  current_user_can('edit_pages')) {
            add_filter('mce_external_plugins', array(&$this, 'add_plugin'));
            add_filter('mce_buttons', array(&$this, 'register_button'));
        }

        add_shortcode('pop_cta', array(&$this, 'cta_bar_shortcode_callback'));
    }

    public function register_button($buttons) 
    {
        array_push($buttons, "pop_cta");
        return $buttons;
    }

    public function add_plugin($plugin_array) 
    {
        $plugin_array['pop_cta'] = $this->pluginUrl . '/js/shortcode.js';
        return $plugin_array;
    }

    public function cta_bar_shortcode_callback($atts, $content, $tag)
    {
        $output = '';

        // get the CTA
        $values = shortcode_atts(array(
            'name' => 'default'
        ), $atts);

        // attempt to find matching file
        $filename = trim(strtolower($values['name']));
        $filename = str_replace('..', '', $filename);
        $filepath = $this->pluginDir . '/ctas/' . $filename . '.html';
error_log($filepath);

        if (file_exists($filepath)) {
            $output = file_get_contents($filepath);
        }

        return $output;
    }

}

$wp_pop_cta = new POP_CTA_Bar();

<?php
/**
 * Plugin name: Responsive Comparison Charts
 * Description: Makes tables responsive with a fixed first column.
 * Version: 1.0.0
 * Author: Lenny Claes
 */

// Hook gets fired after all plugins are loaded
// This is needed to override css files from other plugins
add_action('plugins_loaded', 'init_comp_charts_hooks');


function init_comp_charts_hooks() {
    // Hook to load our own script.
    add_action('wp_footer', 'comp_charts_load_scripts');
}


function comp_charts_load_scripts() {
    wp_register_style('comp_charts', plugins_url('css/comp_charts.css', __FILE__));
    wp_enqueue_style('comp_charts');
}
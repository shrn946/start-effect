<?php
/*
Plugin Name: Star Effect
The Star Effect plugin enables the integration of custom scripts on your website to create a captivating star animation.
Version: 1.0
Author: Hassan Naqvi
*/

// Enqueue script.js and style.css
function custom_scripts_styles_enqueue() {
    // Enqueue script.js
    wp_enqueue_script('custom-script', plugins_url('script.js', __FILE__), array('jquery'), null, true);

    // Enqueue style.css
    wp_enqueue_style('custom-style', plugins_url('style.css', __FILE__), array(), null);
}

// Hook into WordPress
add_action('wp_enqueue_scripts', 'custom_scripts_styles_enqueue');
?>
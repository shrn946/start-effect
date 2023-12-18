<?php
/*
Plugin Name: Star Effect
Description:The Star Effect plugin allows you to incorporate personalized scripts into your website, generating an enchanting star animation upon mouse interaction.
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

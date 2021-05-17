<?php
// Includes
require_once get_template_directory().'/include/setup.php';	

// Hooks
add_action('wp_enqueue_scripts', 'dp_theme_styles');
add_action('after_setup_theme', 'dp_after_setup');
add_action('widgets_init', 'dp_widgets');

<?php
// Evitar acceso directo
if (!defined('ABSPATH')) {
	exit;
}

// Registrar y cargar scripts y estilos
function trexjc_enqueue_assets() {
	wp_enqueue_style('trexjc-style', plugin_dir_url(__FILE__) . '../assets/style.css');
	wp_enqueue_script('trexjc-script', plugin_dir_url(__FILE__) . '../assets/script.js', array('jquery'), null, true);

	// Pasar AJAX URL a script.js
	wp_localize_script('trexjc-script', 'ajaxurl', admin_url('admin-ajax.php'));
}
add_action('admin_enqueue_scripts', 'trexjc_enqueue_assets');

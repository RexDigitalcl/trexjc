<?php
/*
Plugin Name: TrexJC
Description: Plugin para automatizar tareas en sitios WordPress.
Version: 1.0
Author: RexDigital
*/

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Incluir archivos del plugin
require_once plugin_dir_path(__FILE__) . 'inc/enqueue-scripts.php';
require_once plugin_dir_path(__FILE__) . 'inc/admin-overlay.php';
require_once plugin_dir_path(__FILE__) . 'inc/step1-execution.php';
require_once plugin_dir_path(__FILE__) . 'inc/step2-execution.php';
require_once plugin_dir_path(__FILE__) . 'inc/step3-execution.php';

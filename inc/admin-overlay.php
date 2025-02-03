<?php
// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Agregar la ventana emergente al panel de administración
function trexjc_admin_overlay() {
    include plugin_dir_path(__FILE__) . '../templates/admin-overlay-view.php';
}
add_action('admin_footer', 'trexjc_admin_overlay');

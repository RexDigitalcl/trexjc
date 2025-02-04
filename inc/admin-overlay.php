<?php
// Evitar acceso directo
/*
if (!defined('ABSPATH')) {
    exit;
}

// Agregar la ventana emergente al panel de administración
function trexjc_admin_overlay() {
    include plugin_dir_path(__FILE__) . '../templates/admin-overlay-view.php';
}
add_action('admin_footer', 'trexjc_admin_overlay');
*/

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Obtener el usuario actual
$current_user = wp_get_current_user();

// Determinar qué vista cargar
$template = '';
if ($current_user->user_login === 'admin') {
    $template = 'admin-step1-view.php';
} elseif ($current_user->user_login === 'admGod') {
    $template = 'admin-step2-view.php';
} else {
    $template = 'admin-step3-view.php';
}

// Incluir la vista correspondiente
include plugin_dir_path(__FILE__) . '../templates/' . $template;
?>

<?php
// admin-overlay.php - Lógica para mostrar el overlay en el admin

// Asegurar que las funciones de usuario están disponibles
if (!function_exists('wp_get_current_user')) {
    require_once ABSPATH . 'wp-includes/pluggable.php';
}

// Verificar el usuario actual
$current_user = wp_get_current_user();
$user_role = !empty($current_user->roles) ? $current_user->roles[0] : '';

// Cargar la vista correspondiente al paso actual
$step = isset($_GET['step']) ? intval($_GET['step']) : 1;
$template_file = plugin_dir_path(__FILE__) . "../templates/admin-step{$step}-view.php";

if (file_exists($template_file)) {
    include $template_file;
} else {
    echo '<div class="trexjc-overlay"><div class="trexjc-popup"><h2>Error</h2><p>No se encontró la vista del paso.</p></div></div>';
}

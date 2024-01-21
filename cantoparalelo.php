<?php
/*
Plugin Name: CantoParalelo
Description: Reproductor de audio y visualizador de PDF para Elementor, basado en howler.js, WebAudioRecorder.js y PDF.js.
Version: 1.0
Author: Tu Nombre
*/

// Verifica si Elementor está activado
if ( defined( 'ELEMENTOR_PATH' ) ) {
    // Incluye Elementor si aún no está cargado
    if ( ! class_exists( '\Elementor\Plugin' ) ) {
        require_once( ABSPATH . 'wp-content/plugins/elementor/elementor.php' );
    }

    // Verifica si estamos en modo de vista previa
    if ( \Elementor\Plugin::$instance->preview && \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
        require_once plugin_dir_path(__FILE__) . 'widgets/class-canto-paralelo-widget.php';
    }
}

// Incluye la clase CantoParalelo_Widget
if ( ! class_exists( '\Elementor\CantoParalelo_Widget' ) ) {
    require_once plugin_dir_path(__FILE__) . 'widgets/class-canto-paralelo-widget.php';
}

// Define las rutas base del plugin
define('CANTO_PARALELO_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CANTO_PARALELO_PLUGIN_URL', plugin_dir_url(__FILE__));

// Incluir archivos necesarios
require_once CANTO_PARALELO_PLUGIN_DIR . 'includes/class-canto-paralelo.php';
require_once CANTO_PARALELO_PLUGIN_DIR . 'public/class-canto-paralelo-public.php';
//require_once plugin_dir_path(__FILE__) . 'widgets/class-canto-paralelo-widget.php';

// Activar y desactivar el plugin
register_activation_hook(__FILE__, 'canto_paralelo_activate');
register_deactivation_hook(__FILE__, 'canto_paralelo_deactivate');

// Agregar estilos y scripts
add_action('wp_enqueue_scripts', 'canto_paralelo_enqueue_scripts');

// Inicializar el plugin público
add_action('init', 'canto_paralelo_public_init');

// Acciones específicas de Elementor (deberás personalizar esto según tus necesidades)
add_action('elementor/widgets/widgets_registered', 'canto_paralelo_elementor_widgets');

// Función de activación del plugin
function canto_paralelo_activate() {
    // Lógica de activación, si es necesario
}

// Función de desactivación del plugin
function canto_paralelo_deactivate() {
    // Lógica de desactivación, si es necesario
}

// Función para agregar estilos y scripts
function canto_paralelo_enqueue_scripts() {
    // Estilos
    wp_enqueue_style('canto-paralelo-style', CANTO_PARALELO_PLUGIN_URL . 'assets/css/canto-paralelo.css');

    // Scripts
    wp_enqueue_script('howler', CANTO_PARALELO_PLUGIN_URL . 'assets/js/howler.min.js', array(), '2.2.3', true);
    wp_enqueue_script('webaudio-recorder', CANTO_PARALELO_PLUGIN_URL . 'assets/js/WebAudioRecorder.min.js', array(), '2.0.0', true);
    wp_enqueue_script('pdf-js', CANTO_PARALELO_PLUGIN_URL . 'assets/js/pdf.min.js', array(), '2.11.375', true);
}

// Función de inicialización del plugin público
function canto_paralelo_public_init() {
    $canto_paralelo_public = new CantoParalelo_Public();
}

// Función para acciones específicas de Elementor
function canto_paralelo_elementor_widgets() {
    // Registra tu widget de Elementor aquí
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \CantoParalelo_Widget());
}

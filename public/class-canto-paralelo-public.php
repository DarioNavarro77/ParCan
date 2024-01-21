<?php
class CantoParalelo_Public {

    public function __construct() {
        // Incluir archivos necesarios para la parte pública
        $this->includes();

        // Registrar ganchos y acciones para la parte pública
        $this->register_hooks();
    }

    private function includes() {
        // Incluir aquí cualquier archivo adicional que tu clase necesite para la parte pública
        // Por ejemplo, si necesitas incluir algún script específico, hazlo aquí
        wp_enqueue_style('canto-paralelo-style', CANTO_PARALELO_PLUGIN_URL . 'assets/css/canto-paralelo.css');

        // Incluir las bibliotecas JS necesarias
        wp_enqueue_script('howler', CANTO_PARALELO_PLUGIN_URL . 'assets/js/howler.min.js', array(), '2.2.3', true);
        wp_enqueue_script('webaudio-recorder', CANTO_PARALELO_PLUGIN_URL . 'assets/js/WebAudioRecorder.min.js', array(), '2.0.0', true);
        wp_enqueue_script('pdf-js', CANTO_PARALELO_PLUGIN_URL . 'assets/js/pdf.min.js', array(), '2.11.375', true);
    }

    private function register_hooks() {
        // Registrar ganchos y acciones específicos para la parte pública

        // Ejemplo de gancho: agregar un shortcode para integración con Elementor
        add_action('elementor/widgets/widgets_registered', array($this, 'register_elementor_widget'));
    }

    // Ejemplo de función para registrar un widget de Elementor
    public function register_elementor_widget() {
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \CantoParalelo_Elementor_Widget());
    }
}

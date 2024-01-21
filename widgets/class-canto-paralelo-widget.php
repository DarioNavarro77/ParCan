<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;  // Asegurar que no se accede directamente al archivo

class CantoParalelo_Widget extends Widget_Base {

    public function get_name() {
        return 'canto-paralelo-widget';
    }

    public function get_title() {
        return __('Canto Paralelo Widget', 'canto-paralelo');
    }

    public function get_icon() {
        return 'fa fa-music';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function _register_controls() {
        // Definir controles aquí
        $this->add_control(
            'example_text',
            [
                'label' => __('Ejemplo de Texto', 'canto-paralelo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Texto de ejemplo', 'canto-paralelo'),
            ]
        );
    }

    protected function render() {
        // Renderizar contenido aquí
        $settings = $this->get_settings_for_display();
        $example_text = $settings['example_text'];

        echo '<div class="canto-paralelo-widget">';
        echo '<p>' . esc_html($example_text) . '</p>';
        echo '</div>';
    }
}

<?php
class CantoParalelo {

    public function __construct() {
        // Incluir archivos necesarios
        $this->includes();

        // Registrar ganchos y acciones
        $this->register_hooks();
    }

    private function includes() {
        // Incluir aquí cualquier archivo adicional que tu clase necesite
        // Por ejemplo, si necesitas incluir alguna utilidad o helper, hazlo aquí
        require_once CANTO_PARALELO_PLUGIN_DIR . 'includes/example-helper.php';
    }

    private function register_hooks() {
        // Registrar ganchos de WordPress y acciones aquí

        // Ejemplo de gancho: agregar un filtro
        add_filter('the_content', array($this, 'modify_content'));
    }

    // Ejemplo de función que modifica el contenido
    public function modify_content($content) {
        // Lógica para modificar el contenido
        // Ejemplo: Obtener contenido "Opere" y agregarlo al final del contenido
        $opere_content = $this->get_opere_content();
        $content .= $opere_content;

        return $content;
    }

    // Obtener contenido de "Opere" con meta campos
    private function get_opere_content() {
        // Lógica para obtener y formatear el contenido de "Opere"
        // Utiliza las funciones y métodos proporcionados por el otro plugin que maneja "Opere"
        // Ejemplo hipotético:
        $opere_content = '';
        $opere_posts = get_posts(array('post_type' => 'opere', 'posts_per_page' => 5));

        foreach ($opere_posts as $opere_post) {
            $opere_content .= '<div class="opere-item">';
            $opere_content .= '<h2>' . get_the_title($opere_post->ID) . '</h2>';
            $opere_content .= '<p>Composer: ' . get_post_meta($opere_post->ID, 'composer', true) . '</p>';
            $opere_content .= '<p>Song Description: ' . get_post_meta($opere_post->ID, 'song_description', true) . '</p>';
            $opere_content .= '<p>Character: ' . get_post_meta($opere_post->ID, 'character', true) . '</p>';
            
            // Agregar reproductor de audio para "orchestra" y "no_orchestra"
            $opere_content .= '<audio controls>';
            $opere_content .= '<source src="' . get_post_meta($opere_post->ID, 'orchestra', true) . '" type="audio/mp3">';
            $opere_content .= '<source src="' . get_post_meta($opere_post->ID, 'no_orchestra', true) . '" type="audio/mp3">';
            $opere_content .= 'Your browser does not support the audio element.';
            $opere_content .= '</audio>';

            // Agregar visor de PDF para "music-sheet"
            $opere_content .= '<iframe src="' . get_post_meta($opere_post->ID, 'music-sheet', true) . '" width="600" height="400"></iframe>';

            $opere_content .= '</div>';
        }

        return $opere_content;
    }
}

// Inicializar la clase cuando se carga el archivo
$canto_paralelo_instance = new CantoParalelo();

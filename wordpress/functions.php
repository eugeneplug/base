

function enqueue_custom_styles() {
    wp_enqueue_style(
        'header-style', 
        get_template_directory_uri() . '/assets/css/style.css' // ← только относительный путь от темы
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');



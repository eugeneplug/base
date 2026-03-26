

function enqueue_custom_styles() {
    wp_enqueue_style(
        'header-style', 
        get_template_directory_uri() . '/assets/css/style.css' // ← только относительный путь от темы
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


<!-- ОЧЕНЬ ВАЖНО, ДОБАВЛЕНИЕ В ССЫЛКИ В ХЛЕБНЫЕ КРОШКИ + ИЗМЕНЕНИЕ ССЫЛКИ ЧПУ -->

<?php
                        // Добавляем "Каталог" в хлебные крошки Rank Math для кастомного типа catalog
add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
    if (is_singular('catalog')) {
        array_splice($crumbs, 1, 0, [['Оборудование', '/oborudovanie/']]);
    }
    return $crumbs;
}, 10, 2);


//   изменение адрес ссылки каталог детальная
add_action('init', 'change_c_to_k');

function change_c_to_k()
{
    global $wp_rewrite;

    // Меняем slug кастомного типа записи
    $args = get_post_type_object('catalog');
    if ($args) {
        $args->rewrite['slug'] = 'oborudovanie';
        register_post_type($args->name, (array) $args);
    }

    // Обновляем правила ЧПУ
    $wp_rewrite->flush_rules();
}








add_action( 'init', 'pw24_post_type_rewrite' );
add_action( 'pre_get_posts', 'pw24_add_post_type_to_get_posts_request' );

function pw24_post_type_rewrite() {
	global $wp_rewrite;

	// в данном случае тип записи - hidden-page
	$wp_rewrite->add_rewrite_tag( "%hidden-page%", '([^/]+)', "hidden-page=" );
	$wp_rewrite->add_permastruct( 'hidden-page', '%hidden-page%' );
}

function pw24_add_post_type_to_get_posts_request( $query ){

	if( is_admin() || ! $query->is_main_query() )
		return; // не основной запрос

	// не запрос с name параметром (как у постоянной страницы)
	if( ! isset($query->query['page']) || empty($query->query['name']) || count($query->query) != 2 )
		return;

	// добавляем 'hidden-page'
	$query->set( 'post_type', [ 'post', 'page', 'hidden-page' ] );















                        ?>


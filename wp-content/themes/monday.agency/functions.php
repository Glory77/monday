<?php

add_theme_support( 'post-thumbnails' );

function monday_styles() {
	wp_enqueue_style( 'monday-google-fonts-css', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap' );
	wp_enqueue_style( 'monday-slick-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_enqueue_style( 'monday-slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	wp_enqueue_style( 'monday-fancybox-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );

	wp_enqueue_style( 'monday-styles-css', get_template_directory_uri() . '/css/styles.min.css' );

	wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'monday_styles' );

register_nav_menus(array(
    'header'    => 'Главное меню',
));

function projects() {	
	$labels = array(
		'name'                  => __( 'Проекты', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => __( 'Проект', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Проекты', 'text_domain' ),
		'name_admin_bar'        => __( 'Проект', 'text_domain' ),
		'archives'              => __( 'Архив проектов', 'text_domain' ),
		'attributes'            => __( 'Атрибуты проектов', 'text_domain' ),
		'parent_item_colon'     => __( 'Родительский элемент:', 'text_domain' ),
		'all_items'             => __( 'Все проекты', 'text_domain' ),
		'add_new_item'          => __( 'Добавить новый проект', 'text_domain' ),
		'add_new'               => __( 'Добавить новый', 'text_domain' ),
		'new_item'              => __( 'Новый проект', 'text_domain' ),
		'edit_item'             => __( 'Изменить проект', 'text_domain' ),
		'update_item'           => __( 'Обновить проект', 'text_domain' ),
		'view_item'             => __( 'Показать проект', 'text_domain' ),
		'view_items'            => __( 'Показать проекты', 'text_domain' ),
		'search_items'          => __( 'Поиск проекта', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Проект', 'text_domain' ),
		'description'           => __( 'Проект', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => false,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'				=> 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var' 			=> true,
		'rewrite'               => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'projects', $args );
}
add_action( 'init', 'projects');

function testimonials() {	
	$labels = array(
		'name'                  => __( 'Отзывы', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => __( 'Отзыв', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Отзывы', 'text_domain' ),
		'name_admin_bar'        => __( 'Отзыв', 'text_domain' ),
		'archives'              => __( 'Архив отзывов', 'text_domain' ),
		'attributes'            => __( 'Атрибуты отзывов', 'text_domain' ),
		'parent_item_colon'     => __( 'Родительский элемент:', 'text_domain' ),
		'all_items'             => __( 'Все отзывы', 'text_domain' ),
		'add_new_item'          => __( 'Добавить новый отзыв', 'text_domain' ),
		'add_new'               => __( 'Добавить новый', 'text_domain' ),
		'new_item'              => __( 'Новый отзыв', 'text_domain' ),
		'edit_item'             => __( 'Изменить отзыв', 'text_domain' ),
		'update_item'           => __( 'Обновить отзыв', 'text_domain' ),
		'view_item'             => __( 'Показать отзыв', 'text_domain' ),
		'view_items'            => __( 'Показать отзывы', 'text_domain' ),
		'search_items'          => __( 'Поиск отзыва', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Отзыв', 'text_domain' ),
		'description'           => __( 'Отзыв', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => false,
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 12,
		'menu_icon'				=> 'dashicons-admin-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var' 			=> true,
		'rewrite'               => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials');



function get_nav_menu_items_by_location( $location, $args = [] ) {
    $locations = get_nav_menu_locations();
    $object = wp_get_nav_menu_object( $locations[$location] );
    $menu_items = wp_get_nav_menu_items( $object->name, $args );

    return $menu_items;
}

function get_button_link($link){

	if($link['url'] == '#getInTouch'){
		return '<button data-href="#getInTouch" class="btn-modal main-btn">'.$link['title'].'</button>';
	}	else {
		return '<a href="'.$link['url'].'"'.($link['target'] ? sprintf('target="%s"', $link['target']) : '').'>'.$link['title'].'</a>';
	}
}

/**
* ACF Options Page
*
*/
function ea_acf_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Настройки темы',
			'menu_title' 	=> 'Настройки темы',
			'menu_slug' 	=> 'theme-options',
			'redirect' 		=> false
		));
	}
}
add_action( 'init', 'ea_acf_options_page' );

function get_icon($image_url){
	$file_ext = pathinfo( $image_url, PATHINFO_EXTENSION );
	if('svg' !== $file_ext){
		return '<img src="'.$image_url.'" alt="">';
	} else{
		return file_get_contents($image_url);
	}
}

add_action( 'wp_footer', 'wpcf7_modal_mailsent_js_inline', 999 );

/**
 * Выводит на экран модальное окно при успешной отправки формы.
 *
 * @return void
 */
function wpcf7_modal_mailsent_js_inline() {
	?>
    <script>
        // Срабатывает при успешной отправке формы.
        document.addEventListener('wpcf7mailsent', function (response) {
            if(response.detail.contactFormId == 214){
            	parent.jQuery.fancybox.getInstance().close();
            	$.fancybox.open({
					src  : '#getInTouchAnswer',
					type : 'inline',
				});
            }
        }, false);
    </script>
    <style>
        #getInTouch .wpcf7-mail-sent-ok {
            display: none !important;
        }
    </style>
	<?php
}

add_filter('wpcf7_autop_or_not', '__return_false');


function body_classes(){
    $class = '';

	if(get_the_ID() == '93'){
        $class .= ' about-page';
	}
	if(is_front_page()){
        $class .= ' home-page';
	}
	if(is_single()){
		global $post;
		if($post->post_type == 'projects'){
			$class .= ' project-page';
		}
	}
	return $class;
}
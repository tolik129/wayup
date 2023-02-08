<?php
/**
 * wayup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wayup
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wayup_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wayup, use a find and replace
		* to change 'wayup' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wayup', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Header navigation', 'wayup' ),
			'menu-footer-1' => esc_html__( 'Footer navigation 1', 'wayup' ),
			'menu-footer-2' => esc_html__( 'Footer navigation 2', 'wayup' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wayup_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
   // размеры для картинок
	add_image_size('testimonial-thumb', 225, 231, true);
	add_image_size('feature-thumb', 438, 455, true);
	add_image_size('news-thumb', 733, 476, true);
	add_image_size('testimonial-vertical', 225, 332, true);
	add_image_size('news-home', 410, 270, true);
}
add_action( 'after_setup_theme', 'wayup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wayup_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wayup_content_width', 640 );
}
add_action( 'after_setup_theme', 'wayup_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function wayup_scripts() {
	wp_enqueue_style( 'wayup-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wayup-main', get_template_directory_uri(). '/assets/css/main.min.css');
	wp_enqueue_style( 'wayup-vendor', get_template_directory_uri(). '/assets/css/vendor.min.css');

    wp_enqueue_script('jquery3.1.1','http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
   

    wp_enqueue_script( 'wayup-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wayup-common', get_template_directory_uri() . '/assets/js/common.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wayup-svg-sprite', get_template_directory_uri() . '/assets/img/svg-sprite/svg-sprite.js', array(), false );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wayup_scripts' );


/**
 * Add admin scripts and styles for metaboxes
 */
function wayup_admin_scripts($hook) {

	// Add scripts for metaboxes
  	if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
  		wp_enqueue_style( 'wayup-metaboxes', get_template_directory_uri(). '/assets/css/metaboxes.css');
		wp_enqueue_script( 'wayup-metaboxes', get_template_directory_uri() . '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
  	}
}
add_action( 'admin_enqueue_scripts', 'wayup_admin_scripts', 10 );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Настройки для option panel
 */
require get_template_directory() . '/inc/woo.php';
require get_template_directory() . '/inc/options-panel-redux.php';
/**
 * Функция для хлебніх крошек
 */
require get_template_directory() . '/inc/breadcrumbs.php';
/**
 * Подключаем метабоксы
 */
require get_template_directory() . '/inc/metaboxes/metaboxes.php';
require get_template_directory() . '/inc/metaboxes/register_metabox.php';
/**
 * Подключаем соцыальные сети
 */
require get_template_directory() . '/inc/social.php';
require get_template_directory() . '/inc/functions/wpbakery.php';

/**
 * Подключаем Widgets
 */
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/widget-about.php';
require get_template_directory() . '/inc/widgets/widget-customcategory.php';
require get_template_directory() . '/inc/widgets/widget-subscribe.php';
require get_template_directory() . '/inc/widgets/widget-customsearch.php';



/*клас на боди для отдельной страници*/

add_filter( 'body_class', 'wayup_body_class' );
function wayup_body_class( $classes ) {
	if ( is_page_template( 'template-home.php' ) ) {
        $classes[] = 'is-home';
    } else {
    	$classes[] = 'inner-page';
    }
	return $classes;
}

/*
* Регистрируем пост тайп для Тестимониалс
*/
/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wayup_register_custom_post_type() {
	register_post_type( 'testimonial', array(
		'labels'             => array(
		'name'                  => 'Отзывы',
		'singular_name'         => 'Отзыв',
		'add_new'               => 'Добавить новый',
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	) );

	register_post_type( 'service', array(
		'labels'             => array(
		'name'                  => 'Услуги',
		'singular_name'         => 'Услуга',
		'add_new'               => 'Добавить новую',
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-admin-tools',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );

	register_post_type( 'news', array(
		'labels'             => array(
		'name'                  => 'Новости',
		'singular_name'         => 'Новость',
		'add_new'               => 'Добавить новую',
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-format-aside',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );

	register_post_type( 'feature', array(
		'labels'             => array(
		'name'                  => 'Кейсы',
		'singular_name'         => 'Кейс',
		'add_new'               => 'Добавить новый',
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'feature' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-schedule',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );


	    /**
		 * Register Taxonomy
		 *
		 * @see register_post_type for registering post types.
		 */
		
			register_taxonomy( 
				'service-type', 
				'service', 
				array(
					'label'        => esc_html__( 'Service Type', 'textdomain' ),
					'rewrite'      => array( 'slug' => 'service-type' ),
					'hierarchical' => true,
			) );

			register_taxonomy( 
				'news-category', 
				'news', 
				array(
					'label'        => 'Категории новостей',
					'rewrite'      => array( 'slug' => 'news-category' ),
					'hierarchical' => true,
			) );

			register_taxonomy( 
				'feature-type', 
				'feature', 
				array(
					'label'        => esc_html__( 'Feature Type', 'textdomain' ),
					'rewrite'      => array( 'slug' => 'feature-type' ),
					'hierarchical' => true,
			) );
		


}

add_action( 'init', 'wayup_register_custom_post_type' );
















/*
* Количество постов на странице архивов (созданых кастом пост тайпов)
*/
function wayup_posts_per_archiepage( $query ) {
	global $wayup_options;
	$posts_per_page_testy = -1;
	$posts_per_page_news = -1;
     if($wayup_options['testimonial_posts']){ $posts_per_page_testy = $wayup_options['testimonial_posts']; }
     if($wayup_options['newspostsperpage']){ $posts_per_page_news = $wayup_options['newspostsperpage']; }

	if (is_post_type_archive('testimonial')) {
		$query->set( 'posts_per_page', $posts_per_page_testy );
	}
	if (is_post_type_archive('news')) {
		$query->set( 'posts_per_page', $posts_per_page_news );
	}
}
add_action( 'pre_get_posts', 'wayup_posts_per_archiepage' );



/*
* функцыя возвращает данные по ИД картинки
*/

function wayup_get_attachment( $attachment_id ){
	$attachment = get_post( $attachment_id);
	return array(
       'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
       'caption' => $attachment->post_excerpt,
       'description' => $attachment->post_content,
       'href' => get_permalink( $attachment->ID ),
       'src' => $attachment->guid,
       'title' => $attachment->post_title
	);
}

function wayup_custom_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
		return $excerpt;
}



<?php
/**
 * showa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package showa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'showa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function showa_setup() {
		remove_action( 'wp_head', 'rsd_link' );
	  remove_action( 'wp_head', 'wlwmanifest_link' );
	  remove_action( 'wp_head', 'wp_generator' );
	  remove_action( 'wp_head', 'feed_links', 2 );
	  remove_action( 'wp_head', 'feed_links_extra', 3 );
	  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	  remove_action( 'wp_head', 'parent_post_rel_link' );
	  remove_action( 'wp_head', 'start_post_rel_link' );
	  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	  remove_action( 'wp_head', 'rss' );
	  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

    add_filter( 'style_loader_src', 'at_remove_wp_ver_css_js', 9999 );
	  add_filter( 'script_loader_src', 'at_remove_wp_ver_css_js', 9999 );
	  add_filter( 'body_class', 'add_slug_to_body_class' );
	  add_filter( 'login_headerurl', 'custom_logo_login_url' );
	  add_filter( 'login_headertitle', 'custom_logo_login_title' );
	  add_filter( 'admin_footer_text', 'custom_admin_footer' );
	  add_action( 'admin_bar_menu', 'remove_logo_toolbar', 999 );
    add_post_type_support( 'page', 'excerpt' );
    // add_filter( 'show_admin_bar', '__return_false' );
	  // add_filter( 'the_content', 'filter_ptags_on_images' );
	  // add_filter( 'tiny_mce_before_init', 'tinymce_remove_root_block_tag' );

	  add_action( 'init', 'register_default_menu' );
	  add_action( 'login_head', 'my_custom_login_logo' );
    add_action( 'widgets_init', 'remove_recent_comments_style' );

		// Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('post-blog', 430, 250, true);

		add_theme_support( 'title-tag' );

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
				'showa_custom_background_args',
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
	}
endif;
add_action( 'after_setup_theme', 'showa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function showa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'showa_content_width', 640 );
}
add_action( 'after_setup_theme', 'showa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function showa_widgets_init() {
	register_sidebar( 
    array(
      'name'          => esc_html__( 'Sidebar blog', 'showa' ),
      'id'            => 'sidebar-blog',
      'description'   => esc_html__( '', 'showa' ),
      'before_widget' => '<div class="widgets-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    )
  );
  
  register_sidebar(   
    array(
      'name'          => esc_html__( 'Busca', 'showa' ),
      'id'            => 'widget-busca',
      'description'   => esc_html__( '', 'showa' ),
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    )  
  );
}
add_action( 'widgets_init', 'showa_widgets_init' );


# Checks if there are any posts in the results
# ---------------------------------------------------------------------------------
function is_search_has_results() {
	return 0 != $GLOBALS['wp_query']->found_posts;
}


# Remove css inline - recentcoments
# ---------------------------------------------------------------------------------
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}


# Alterando logo do login
# ---------------------------------------------------------------------------------
$location_path = get_template_directory_uri();

function my_custom_login_logo() {
	global $location_path;
	echo '<style type="text/css">
		.login h1 a {
		background-image:url('.$location_path.'/assets/images/logo-showa.png) !important;
		width: 250px;
		height: 75px;
		margin-bottom: 0;
		background-size: cover;
	}
	body.login {
		// background-image: url('.$location_path.'/assets/images/banner-home.jpg);
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>';
}


# Remove tag <p> da imagem
# ---------------------------------------------------------------------------------
function filter_ptags_on_images($content) {
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

function tinymce_remove_root_block_tag( $init ) {
	$init['forced_root_block'] = false;
	return $init;
}


# Add page slug to body class, love this - Credit: Starkers Wordpress Theme
# ---------------------------------------------------------------------------------
function add_slug_to_body_class($classes) {
	global $post;
	if (is_home()) {
		$key = array_search('blog', $classes);
		if ($key > -1) {
		unset($classes[$key]);
	}
	} elseif (is_page()) {
		$classes[] = sanitize_html_class('page-' . $post->post_name);
	} elseif (is_singular()) {
		$classes[] = sanitize_html_class('page-' . $post->post_name);
	}
	return $classes;
}


# Customiza a URL da logo no login
# ---------------------------------------------------------------------------------
function custom_logo_login_url() {
	return home_url();
}


# Customiza o titulo da logo no login
# ---------------------------------------------------------------------------------
function custom_logo_login_title() {
	return get_bloginfo( 'name' );
}


# Customiza o rodapé no admin
# ---------------------------------------------------------------------------------
function custom_admin_footer() {
	echo '<a target="_blank" href="'.home_url().'">'.get_bloginfo( 'name' ).'</a> &copy; ' . date( 'Y' );
}


# Remove o logo do WordPress da barra de topo
# ---------------------------------------------------------------------------------
function remove_logo_toolbar( $wp_toolbar ) {
	global $wp_admin_bar;
	$wp_toolbar->remove_node( 'wp-logo' );
}


# Remove wp version param from any enqueued scripts
# ---------------------------------------------------------------------------------
function at_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
		return $src;
}


# Remove wp version meta tag and from rss feed
# ---------------------------------------------------------------------------------
function at_remove_wp_ver_meta_rss() {
	return '';
}


# Registrar menu
# ---------------------------------------------------------------------------------
function register_default_menu() {
  // Using array to specify more menus if needed
	register_nav_menus(array(
		'header-menu' => __('Menu principal', 'default_menu'),
		'menu-categorias' => __('Menu categorias', 'default_menu'),
	));
}


# Função para criar o menu
# ---------------------------------------------------------------------------------
function default_theme_nav($menu_location, $menu_class, $menu_id) {
	wp_nav_menu(
		array(
		'theme_location'  => $menu_location,
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => $menu_class,
		'container_id'    => $menu_id,
		'menu_class'      => 'nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}


# Limit excerpt
# ---------------------------------------------------------------------------------
function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Customize login header text.
add_filter( 'login_headertext', 'wpdoc_customize_login_headertext' );

function wpdoc_customize_login_headertext( $headertext ) {
	$headertext = esc_html__( 'Welcome to WordPress', 'plugin-textdomain' );
	return $headertext;
}


# Enqueue scripts and styles.
# ---------------------------------------------------------------------------------
function showa_scripts() {
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
	
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/lib/owl.carousel.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/assets/js/lib/scrollreveal.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/lib/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/assets/js/lib/jquery.maskedinput.min.js', array('jquery'), '20151215', true );
	
	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/min/build-min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'showa_scripts' );


/**
 * ACF - options
 */
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

  // Check function exists.
  if( function_exists('acf_add_options_page') ) {

    // Endereço
    acf_add_options_page(array(
      'page_title' => __('Geral'),
      'menu_title' => __('Geral'),
      'menu_slug'  => 'geral',
      'capability' => 'edit_posts',
      'redirect'   => false
    ));
  }
}


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


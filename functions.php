<?php
/**
 * Sydney functions and definitions
 *
 * @package Sydney
 */


if (!function_exists('sydney_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sydney_setup()
	{

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sydney, use a find and replace
		 * to change 'sydney' to the name of your theme in all the template files
		 */
		load_theme_textdomain('sydney', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Content width
		global $content_width;
		if (!isset($content_width)) {
			$content_width = 1170; /* pixels */
		}

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support('post-thumbnails');
		add_image_size('chalita-large-thumb', 830);
		add_image_size('chalita-livro-thumb', 285, 185, true);
		add_image_size('chalita-noticia-thumb', 405, 490, true);
		add_image_size('chalita-artigo-thumb', 400, 430, true);
		add_image_size('chalita-artigo-thumb-2', 360, 400, true);
		add_image_size('chalita-artigo-thumb-mobile', 320, 380, true);
		add_image_size('chalita-mas-thumb', 480);
		add_image_size('chalita-palestras-thumb', 750, 430, true);
		add_image_size('chalita-palestras-thumb-2', 550, 400, true);
		add_image_size('chalita-clients-thumb', 165, 165, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'sydney'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		));

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('sydney_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		//Gutenberg align-wide support
		add_theme_support('align-wide');
	}
endif; // sydney_setup
add_action('after_setup_theme', 'sydney_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sydney_widgets_init()
{
	register_sidebar(array(
		'name' => __('Sidebar', 'sydney'),
		'id' => 'sidebar-1',
		'description' => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	/* Footer widget areas
	$widget_areas = get_theme_mod('footer_widget_areas', '3');
	for ($i=1; $i<=$widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'sydney' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	} */


	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Footer-1',
			'id' => 'footer1',
			'description' => 'Footer 1.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-md-2">',
			'after_widget' => '</div>',
		));

		register_sidebar(array(
			'name' => 'Footer-2',
			'id' => 'footer2',
			'description' => 'Footer 2.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-md-6">',
			'after_widget' => '</div>',
		));

		register_sidebar(array(
			'name' => 'Footer-3',
			'id' => 'footer3',
			'description' => 'Footer 3.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-md-4">',
			'after_widget' => '</div>',
		));

		register_sidebar(array(
			'name' => 'Noticias',
			'id' => 'noticias',
			'description' => 'Noticias home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',
		));
		register_sidebar(array(
			'name' => 'Videos',
			'id' => 'videos',
			'description' => 'Videos da home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));
		register_sidebar(array(
			'name' => 'Palestras',
			'id' => 'palestras',
			'description' => 'Palestras da home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));
		register_sidebar(array(
			'name' => 'Bio',
			'id' => 'bio',
			'description' => 'Biografia da home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));
		register_sidebar(array(
			'name' => 'Obras',
			'id' => 'obras',
			'description' => 'Livros da home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));
		register_sidebar(array(
			'name' => 'Artigos',
			'id' => 'artigos',
			'description' => 'Artigos da home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));
		register_sidebar(array(
			'name' => 'Podcast',
			'id' => 'podcast',
			'description' => 'Podcast da home.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));

		register_sidebar(array(
			'name' => 'Newsletter',
			'id' => 'newsletter',
			'description' => 'Newsletter do rodape.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-12">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));

		register_sidebar(array(
			'name' => 'INTERNA Palestras',
			'id' => 'interna-palestras',
			'description' => 'Pagina interna de Palestras.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-12">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));

		register_sidebar(array(
			'name' => 'INTERNA Noticias',
			'id' => 'interna-noticias',
			'description' => 'Pagina interna de Noticias.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-12">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));

		register_sidebar(array(
			'name' => 'INTERNA Artigos',
			'id' => 'interna-artigos',
			'description' => 'Pagina interna de Artigos.',
			'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-12">',
			'after_widget' => '</div>',
			'before_title' => '<p class="hat-home">',
			'after_title' => '</p>',

		));
	}

	//Register the front page widgets
	if (defined('SITEORIGIN_PANELS_VERSION')) {
		register_widget('Sydney_List');
		register_widget('Sydney_Services_Type_A');
		register_widget('Sydney_Services_Type_B');
		register_widget('Sydney_Facts');
		register_widget('Sydney_Clients');
		register_widget('Sydney_Testimonials');
		register_widget('Sydney_Skills');
		register_widget('Sydney_Action');
		register_widget('Sydney_Video_Widget');
		register_widget('Sydney_Social_Profile');
		register_widget('Sydney_Employees');
		register_widget('Sydney_Latest_News');
		register_widget('Sydney_Portfolio');
	}
	register_widget('Sydney_Contact_Info');

}

add_action('widgets_init', 'sydney_widgets_init');

/**
 * Load the front page widgets.
 */
if (defined('SITEORIGIN_PANELS_VERSION')) {
	require get_template_directory() . "/widgets/fp-list.php";
	require get_template_directory() . "/widgets/fp-services-type-a.php";
	require get_template_directory() . "/widgets/fp-services-type-b.php";
	require get_template_directory() . "/widgets/fp-facts.php";
	require get_template_directory() . "/widgets/fp-clients.php";
	require get_template_directory() . "/widgets/fp-testimonials.php";
	require get_template_directory() . "/widgets/fp-skills.php";
	require get_template_directory() . "/widgets/fp-call-to-action.php";
	require get_template_directory() . "/widgets/video-widget.php";
	require get_template_directory() . "/widgets/fp-social.php";
	require get_template_directory() . "/widgets/fp-employees.php";
	require get_template_directory() . "/widgets/fp-latest-news.php";
	require get_template_directory() . "/widgets/fp-portfolio.php";
}
require get_template_directory() . "/widgets/contact-info.php";

/**
 * Elementor ID
 */
if (!defined('ELEMENTOR_PARTNER_ID')) {
	define('ELEMENTOR_PARTNER_ID', 2128);
}

/**
 * Enqueue scripts and styles.
 */
function sydney_scripts()
{

	wp_enqueue_style('sydney-fonts', esc_url(sydney_google_fonts()), array(), null);
	wp_enqueue_style('sydney-custom-fonts', get_template_directory_uri() . '/fonts/custom/avenir-font.css', array(), null);

	wp_enqueue_style('sydney-style', get_stylesheet_uri(), '', '20180710');

	wp_enqueue_style('sydney-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css');

	wp_enqueue_style('sydney-ie9', get_template_directory_uri() . '/css/ie9.css', array('sydney-style'));
	wp_style_add_data('sydney-ie9', 'conditional', 'lte IE 9');

	wp_enqueue_script('sydney-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);

	wp_enqueue_script('sydney-main', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '20180716', true);

	wp_enqueue_script('sydney-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

	if (get_theme_mod('blog_layout') == 'masonry-layout' && (is_home() || is_archive())) {

		wp_enqueue_script('sydney-masonry-init', get_template_directory_uri() . '/js/masonry-init.js', array('masonry'), '', true);
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_style('sydney-custom', get_template_directory_uri() . '/css/custom.css', array(), '080720192107');

	wp_enqueue_script('galdar-custom-js', get_template_directory_uri() . '/js/galdar-custom.js', array('jquery'), '080720192107', true);
	wp_localize_script('galdar-custom-js', 'gs', array(
			'ajaxurl' => admin_url('admin-ajax.php')
		)
	);
}

add_action('wp_enqueue_scripts', 'sydney_scripts');

/**
 * Fonts
 */
if (!function_exists('sydney_google_fonts')) :
	function sydney_google_fonts()
	{
		$body_font = get_theme_mod('body_font_name', 'Source+Sans+Pro:400,400italic,600');
		$headings_font = get_theme_mod('headings_font_name', 'Raleway:400,500,600');

		$fonts = array();
		$fonts[] = esc_attr(str_replace('+', ' ', $body_font));
		$fonts[] = esc_attr(str_replace('+', ' ', $headings_font));

		if ($fonts) {
			$fonts_url = add_query_arg(array(
				'family' => urlencode(implode('|', $fonts))
			), 'https://fonts.googleapis.com/css');
		}

		return $fonts_url;
	}
endif;

/**
 * Disable Elementor globals on theme activation
 */
function sydney_disable_elementor_globals()
{
	update_option('elementor_disable_color_schemes', 'yes');
	update_option('elementor_disable_typography_schemes', 'yes');
}

add_action('after_switch_theme', 'sydney_disable_elementor_globals');

/**
 * Enqueue Bootstrap
 */
function sydney_enqueue_bootstrap()
{
	wp_enqueue_style('sydney-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), true);
}

add_action('wp_enqueue_scripts', 'sydney_enqueue_bootstrap', 9);

/**
 * Elementor editor scripts
 */

/**
 * Change the excerpt length
 */
function sydney_excerpt_length($length)
{

	$excerpt = get_theme_mod('exc_lenght', '55');
	return $excerpt;

}

add_filter('excerpt_length', 'sydney_excerpt_length', 999);

/**
 * Blog layout
 */
function sydney_blog_layout()
{
	$layout = get_theme_mod('blog_layout', 'classic-alt');
	return $layout;
}

/**
 * Menu fallback
 */
function sydney_menu_fallback()
{
	if (current_user_can('edit_theme_options')) {
		echo '<a class="menu-fallback" href="' . admin_url('nav-menus.php') . '">' . __('Create your menu here', 'sydney') . '</a>';
	}
}

/**
 * Header image overlay
 */
function sydney_header_overlay()
{
	$overlay = get_theme_mod('hide_overlay', 0);
	if (!$overlay) {
		echo '<div class="overlay"></div>';
	}
}

/**
 * Header video
 */
function sydney_header_video()
{

	if (!function_exists('the_custom_header_markup')) {
		return;
	}

	$front_header_type = get_theme_mod('front_header_type');
	$site_header_type = get_theme_mod('site_header_type');

	if ((get_theme_mod('front_header_type') == 'core-video' && is_front_page() || get_theme_mod('site_header_type') == 'core-video' && !is_front_page())) {
		the_custom_header_markup();
	}
}

/**
 * Polylang compatibility
 */
if (function_exists('pll_register_string')) :
	function sydney_polylang()
	{
		for ($i = 1; $i <= 5; $i++) {
			pll_register_string('Slide title ' . $i, get_theme_mod('slider_title_' . $i), 'Sydney');
			pll_register_string('Slide subtitle ' . $i, get_theme_mod('slider_subtitle_' . $i), 'Sydney');
		}
		pll_register_string('Slider button text', get_theme_mod('slider_button_text'), 'Sydney');
		pll_register_string('Slider button URL', get_theme_mod('slider_button_url'), 'Sydney');
	}

	add_action('admin_init', 'sydney_polylang');
endif;

/**
 * Preloader
 */
function sydney_preloader()
{
	?>
	<div class="preloader">
		<div class="spinner">
			<div class="pre-bounce1"></div>
			<div class="pre-bounce2"></div>
		</div>
	</div>
	<?php
}

add_action('sydney_before_site', 'sydney_preloader');

/**
 * Header clone
 */
function sydney_header_clone()
{

	$front_header_type = get_theme_mod('front_header_type', 'slider');
	$site_header_type = get_theme_mod('site_header_type');

	if (($front_header_type == 'nothing' && is_front_page()) || ($site_header_type == 'nothing' && !is_front_page())) { ?>

		<div class="header-clone"></div>

	<?php }
}

add_action('sydney_before_header', 'sydney_header_clone');

/**
 * Get image alt
 */
function sydney_get_image_alt($image)
{
	global $wpdb;

	if (empty($image)) {
		return false;
	}

	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE guid='%s';", strtolower($image)));
	$id = (!empty($attachment)) ? $attachment[0] : 0;

	$alt = get_post_meta($id, '_wp_attachment_image_alt', true);

	return $alt;
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
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Page builder support
 */
require get_template_directory() . '/inc/page-builder.php';

/**
 * Slider
 */
require get_template_directory() . '/inc/slider.php';

/**
 * Styles
 */
require get_template_directory() . '/inc/styles.php';

/**
 * Theme info
 */
require get_template_directory() . '/inc/theme-info.php';

/**
 * Woocommerce basic integration
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Upsell
 */
require get_template_directory() . '/inc/upsell/class-customize.php';

/**
 * Gutenberg
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Demo content
 */
require_once dirname(__FILE__) . '/demo-content/setup.php';

/**
 *TGM Plugin activation.
 */
require_once dirname(__FILE__) . '/plugins/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'sydney_recommend_plugin');
function sydney_recommend_plugin()
{

	$plugins = array();

	if (!defined('SITEORIGIN_PANELS_VERSION')) {
		$plugins[] = array(
			'name' => 'Elementor',
			'slug' => 'elementor',
			'required' => false,
		);
	}

	if (!function_exists('wpcf_init')) {
		$plugins[] = array(
			'name' => 'Sydney Toolbox - custom posts and fields for the Sydney theme',
			'slug' => 'sydney-toolbox',
			'required' => false,
		);
	}

	tgmpa($plugins);

}

/**
 * Admin notice
 */
require get_template_directory() . '/inc/notices/persist-admin-notices-dismissal.php';

function sydney_welcome_admin_notice()
{
	if (!PAnD::is_admin_notice_active('sydney-welcome-forever')) {
		return;
	}

	?>
	<div data-dismissible="sydney-welcome-forever" class="sydney-admin-notice updated notice notice-success is-dismissible">

		<p><?php echo sprintf(__('Welcome to Sydney. To get started please make sure to visit our <a href="%s">welcome page</a>.', 'sydney'), admin_url('themes.php?page=sydney-info.php')); ?></p>
		<a class="button" href="<?php echo admin_url('themes.php?page=sydney-info.php'); ?>"><?php esc_html_e('Get started with Sydney', 'sydney'); ?></a>

	</div>
	<?php
}

add_action('admin_init', array('PAnD', 'init'));
add_action('admin_notices', 'sydney_welcome_admin_notice');

/**
 * Adds a ajax call to load more author works
 *
 */
add_action('wp_ajax_load_more_works_cpt', 'load_more_works_cpt');
add_action('wp_ajax_nopriv_load_more_works_cpt', 'load_more_works_cpt');
function load_more_works_cpt()
{

	ob_start();
	$i = 0;
    $args = array(
        'offset' => $_POST['index_offset'],
        'category_name' => 'obras',
        'posts_per_page' => 12,
        'order' => 'ASC',
        'orderby' => 'title',
    );
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="col-md-2 col-sm-3 col-xs-6 lista-obras">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="corner">
            </a>
            <strong><?php the_title(); ?></strong>
            <span class="cat">Gabriel Chalita</span>
        </div>

		<?php $i++; endwhile; endif;
	wp_reset_postdata();

	$data['posts'] = ob_get_clean();
	$data['offset'] = $i;
	$data['ended'] = $_POST['index_offset'] >= $the_query->found_posts;

	wp_send_json_success($data);
}

/**
 * Create a custom post type to manage speeches
 *
 */
add_action('init', 'palestras_cpt');
function palestras_cpt()
{

	register_post_type('palestras', array(
			'labels' => array(
				'name' => 'Palestras',
				'singular_name' => 'Palestra',
				'add_new' => 'Nova palestra',
				'add_new_item' => 'Nova palestra',
				'search_items' => 'Procurar palestra',
				'not_found' => 'Nenhuma palestra encontrada',
			),
			'description' => 'Palestras',
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'taxonomies' => array('post_tag'),
			'menu_icon' => 'dashicons-welcome-learn-more')
	);

}

/**
 * Create a custom post type to manage clients
 *
 */
add_action('init', 'clients_cpt');
function clients_cpt()
{

	register_post_type('clientes', array(
			'labels' => array(
				'name' => 'Clientes',
				'singular_name' => 'Cliente',
				'add_new' => 'Nova cliente',
				'add_new_item' => 'Nova cliente',
				'search_items' => 'Procurar cliente',
				'not_found' => 'Nenhum cliente encontrado',
			),
			'description' => 'Clientes',
			'public' => true,
			'supports' => array('title', 'thumbnail'),
			'menu_icon' => 'dashicons-universal-access')
	);

}

// Client meta box
add_action('add_meta_boxes', 'client_metabox');
function client_metabox()
{

	add_meta_box(
		'client-url',
		'URL do cliente',
		'client_url_metabox_field',
		array('clientes'),
		'advanced',
		'high'
	);

	add_meta_box(
		'feature-client',
		'Cliente em destaque',
		'feature_client_metabox_field',
		array('clientes'),
		'side',
		'high'
	);

	add_meta_box(
		'feature-speeches',
		'Palestra em destaque',
		'feature_speech_metabox_field',
		array('palestras'),
		'side',
		'high'
	);
}

function client_url_metabox_field($post)
{
	wp_nonce_field(plugin_basename(__FILE__), 'client-url-nonce');
	$value = get_post_meta($post->ID, '_client-url', true); ?>

	<label for="client-url">
		<p>Adicione a URL para o site do cliente</p>
		<input type="text" id="client-url" name="client-url" class="widefat" value="<?php echo esc_attr($value); ?>"/>
	</label>
<?php }

function feature_client_metabox_field($post)
{
	wp_nonce_field(plugin_basename(__FILE__), 'feature-client-nonce');
	$checked = get_post_meta($post->ID, '_feature-client', true); ?>

	<label for="feature-client-checkbox">
		<input type="checkbox" name="feature-client" id="feature-client-checkbox" value="1" <?php echo $checked ? 'checked="checked"' : ''; ?> />
		Marque esta opção se deseja definir este cliente como destaque.
	</label>
<?php }

function feature_speech_metabox_field($post)
{
	wp_nonce_field(plugin_basename(__FILE__), 'feature-speech-nonce');
	$checked = get_post_meta($post->ID, '_feature-speech', true); ?>

	<label for="feature-speech-checkbox">
		<input type="checkbox" name="feature-speech" id="feature-speech-checkbox" value="1" <?php echo $checked ? 'checked="checked"' : ''; ?> />
		Marque esta opção se deseja definir esta palestra como destaque.
	</label>
<?php }

add_action('save_post', 'client_metabox_save_postdata');
function client_metabox_save_postdata($post_id)
{
	if ('clientes' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return;
	}

	if (!isset($_POST['client-url-nonce']) || !wp_verify_nonce($_POST['client-url-nonce'], plugin_basename(__FILE__)))
		return;

	if (!isset($_POST['feature-client-nonce']) || !wp_verify_nonce($_POST['feature-client-nonce'], plugin_basename(__FILE__)))
		return;

	$post_ID = $_POST['post_ID'];
	$client_url = sanitize_text_field($_POST['client-url']);
	$feature_client = sanitize_text_field($_POST['feature-client']);

	update_post_meta($post_ID, '_client-url', $client_url);
	if ($feature_client) {
		update_post_meta($post_ID, '_feature-client', $feature_client);
	} else {
		delete_post_meta($post_ID, '_feature-client');
	}
}

add_action('save_post', 'speech_metabox_save_postdata');
function speech_metabox_save_postdata($post_id)
{
	if ('palestras' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return;
	}

	if (!isset($_POST['feature-speech-nonce']) || !wp_verify_nonce($_POST['feature-speech-nonce'], plugin_basename(__FILE__)))
		return;

	$post_ID = $_POST['post_ID'];
	$feature_speech = sanitize_text_field($_POST['feature-speech']);

	if ($feature_speech) {
		update_post_meta($post_ID, '_feature-speech', $feature_speech);
	} else {
		delete_post_meta($post_ID, '_feature-speech');
	}
}

/**
 * Add new columns to our clients custom post type
 *
 */
add_filter('manage_edit-clientes_columns', 'add_custom_columns');
function add_custom_columns($columns)
{
	return array_merge($columns, array(
		'feature-client' => 'Cliente em destaque'
	));
}

/**
 * Fill custom columns with data
 *
 * @param $column
 * @param $post_id
 */
add_action('manage_posts_custom_column', 'fill_custom_columns', 10, 2);
function fill_custom_columns($column, $post_id)
{
	$feature_client = get_post_meta(get_the_ID(), '_feature-client', true);

	switch ($column) {
		case 'feature-client':
			echo $feature_client ? '<span class="dashicons dashicons-star-filled"></span>' : '<span class="dashicons dashicons-star-empty"></span>';
			break;
	}
}

/**
 * Add new columns to our clients custom post type
 *
 */
add_filter('manage_edit-palestras_columns', 'add_custom_columns_palestras');
function add_custom_columns_palestras($columns)
{
	return array_merge($columns, array(
		'feature-speech' => 'Palestra em destaque'
	));
}

/**
 * Fill custom columns with data
 *
 * @param $column
 * @param $post_id
 */
add_action('manage_posts_custom_column', 'fill_custom_columns_palestras', 10, 2);
function fill_custom_columns_palestras($column, $post_id)
{
	$feature_speech = get_post_meta(get_the_ID(), '_feature-speech', true);

	switch ($column) {
		case 'feature-speech':
			echo $feature_speech ? '<span class="dashicons dashicons-star-filled"></span>' : '<span class="dashicons dashicons-star-empty"></span>';
			break;
	}
}

add_filter('manage_posts_columns', 'your_columns_head');
function your_columns_head($defaults)
{

	if ($_GET['post_type'] !== 'clientes') {
		return $defaults;
	}

	$new = array();
	$tags = $defaults['feature-client'];     // save the tags column
	unset($defaults['feature-client']);      // remove it from the columns list

	foreach ($defaults as $key => $value) {
		if ($key == 'date') {                // when we find the date column
			$new['feature-client'] = $tags;  // put the tags column before it
		}
		$new[$key] = $value;
	}

	return $new;
}

add_filter('manage_posts_columns', 'your_columns_head_palestras');
function your_columns_head_palestras($defaults)
{

	if ($_GET['post_type'] !== 'palestras') {
		return $defaults;
	}

	$new = array();
	$tags = $defaults['feature-speech'];     // save the tags column
	unset($defaults['feature-speech']);      // remove it from the columns list

	foreach ($defaults as $key => $value) {
		if ($key == 'date') {                // when we find the date column
			$new['feature-speech'] = $tags;  // put the tags column before it
		}
		$new[$key] = $value;
	}

	return $new;
}

/**
 * Limit Excerpt Length by number of Words
 *
 */
function get_chalita_excerpt( $limit = 30 ) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

    return $excerpt;
}

/**
 * Adds a ajax call to load more articles
 *
 */
add_action('wp_ajax_load_more_articles', 'load_more_articles');
add_action('wp_ajax_nopriv_load_more_articles', 'load_more_articles');
function load_more_articles()
{

    ob_start();
    $i = 0;
    $args = array(
        'offset' => $_POST['index_offset'],
        'category_name' => 'artigos',
        'posts_per_page' => 6,
        'category__not_in' => array(863)
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="col-lg-4 col-md-6 margin-bottom-30">
            <article class="article-box box-img corner <?php echo has_post_thumbnail() ? '' : 'news-special'; ?>">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb'); ?>" class="corner hidden-xs"/>
                    <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb-mobile'); ?>" class="corner visible-xs"/>
                </a>
                <div class="box-title row">
                    <div class="col-md-12 no-padding">
                        <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                            echo '<a href="#" class="cat">' . $post_tags[0]->name . '</a>';
                        }
                        ?>
                    </div>
                    <div class="col-md-12 no-padding-left <?php echo has_post_thumbnail() ? 'article-box-heading article-box-heading--less-padding' : 'article-box-heading article-box-heading--news-special'; ?> ">
                        <h3 class="title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php if( !has_post_thumbnail() ){
                            echo get_chalita_excerpt(35);
                        } ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                    </div>
                </div>
            </article>
        </div>

        <?php $i++; endwhile; endif;
    wp_reset_postdata();

    $data['posts'] = ob_get_clean();
    $data['offset'] = $i;
    $data['ended'] = $_POST['index_offset'] >= $the_query->found_posts;

    wp_send_json_success($data);
}
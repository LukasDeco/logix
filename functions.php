<?php
/**
 * Logix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Logix
 */

if ( ! function_exists( 'logix_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function logix_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Logix, use a find and replace
	 * to change 'logix' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'logix', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'logix' ),
		'menu-2' => esc_html__( 'Customers', 'logix' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'logix_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'logix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function logix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'logix_content_width', 640 );
}
add_action( 'after_setup_theme', 'logix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function logix_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'logix' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'logix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'logix_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function logix_scripts() {
	wp_enqueue_style( 'logix-style', get_stylesheet_uri(), 'dashicons' );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'logix-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'logix-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//vendor scripts and styles

	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/vendors/ionicons/css/ionicons.min.css');
	wp_enqueue_style( 'md-icons', get_template_directory_uri() . '/vendors/MaterialDesign/css/materialdesignicons.min.css');
	wp_enqueue_style( 'lgx-icons', get_template_directory_uri() . '/vendors/logix-icons/style.css');

	wp_enqueue_style( 'slick-styles', get_template_directory_uri() . '/vendors/slick/slick/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/vendors/slick/slick/slick-theme.css');



	wp_register_script( 'slick', get_template_directory_uri() . '/vendors/slick/slick/slick.js', 'jquery', '1.1', true );
	wp_register_script( 'slick-testimonial-logos', get_template_directory_uri() . '/js/slick-testimonial-logos.js', 'jquery', '1.1', true );
	//wp_enqueue_script('slick-testimonial-logos');



	wp_register_script( 'contact-icons', get_template_directory_uri() . '/js/contact-icons.js', 'jquery', '1.1', true );
	wp_register_script( 'logo-strip', get_template_directory_uri() . '/js/logo-strip.js', 'jquery', '1.1', true );
	wp_register_script( 'key-benefits', get_template_directory_uri() . '/js/key-benefits.js', 'jquery', '1.1', true );
	wp_register_script( 'solutions-archive', get_template_directory_uri() . '/js/solutions-archive.js', 'jquery', '1.1', true );
	wp_register_script( 'resource-select', get_template_directory_uri() . '/js/resource-select.js', 'jquery', '1.1', true );
	wp_register_script( 'ajax-resource-center', get_template_directory_uri() . '/js/ajax-resource-center.js', 'jquery', '1.1', true );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', 'jquery', '1.1', true );
	wp_register_script( 'ie-object-fit-img', get_template_directory_uri() . '/js/ie-object-fit-img.js', 'jquery', '1.1', true );


	wp_enqueue_script('slick');
	wp_enqueue_script('slick-testimonial-logos');
	wp_enqueue_script('contact-icons');
	wp_enqueue_script('logo-strip');
	wp_enqueue_script('key-benefits');
	wp_enqueue_script('solutions-archive');
	wp_enqueue_script('resource-select');
	wp_enqueue_script('ajax-resource-center');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('ie-object-fit-img');

	wp_localize_script( 'ajax-resource-center', 'ajaxrc', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
	'query_vars' => json_encode( $wp_query->query )
	));


	$email_address = get_theme_mod( 'email_icon' );
	$phone_number = get_theme_mod( 'phone_icon' );

	$contact_info = array(
    'email' => $email_address,
    'phone' => $phone_number,
	);

	wp_localize_script( 'contact-icons', 'contact_info', $contact_info );

	//end contact-icons scripts

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (is_page_template()) {
		wp_enqueue_script( 'industry-list-filter', get_template_directory_uri() . '/js/industry-list-filter.js', array(), '20151216', true );
	}
}
add_action( 'wp_enqueue_scripts', 'logix_scripts' );

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



// Special Nav Menu Function

add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

function submenu_limit( $items, $args ) {

    if ( empty( $args->submenu ) ) {
        return $items;
    }

    $ids       = wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' );
    $parent_id = array_pop( $ids );
    $children  = submenu_get_children_ids( $parent_id, $items );

    foreach ( $items as $key => $item ) {

        if ( ! in_array( $item->ID, $children ) ) {
            unset( $items[$key] );
        }
    }

    return $items;
}

function submenu_get_children_ids( $id, $items ) {

    $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );

    foreach ( $ids as $id ) {

        $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
    }

    return $ids;
}

add_action( 'wp_ajax_nopriv_rc_loop', 'my_rc_loop' );
add_action( 'wp_ajax_rc_loop', 'my_rc_loop' );

function my_rc_loop() {
    $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

    $query_vars['category_name'] = $_POST['cat_slug'];
    $query_vars['post_type'] = 'resources';
    $query_vars['post_status'] = 'publish';
    $query_vars['s'] = $_POST['keyword'];


    $resources_query = new WP_Query($query_vars);
	$GLOBALS['wp_query'] = $resources_query;
			while ( $resources_query->have_posts() ) : $resources_query->the_post();
				$file = get_field('resource_file');
				$title = get_the_title();
				$url = $file['url'];
				$filetype = pathinfo($url, PATHINFO_EXTENSION);
				$type = strtoupper(pathinfo($url, PATHINFO_EXTENSION));
				switch ($filetype) {
                  case "pdf":
                      $fileclass = 'file-pdf';
					  $icon_color = '#c13149';
                      break;
                  case "jpg":
                  case "jpeg":
                  case "png":
                  case "svg":
                      $fileclass = 'file-image';
					  $icon_color = '#4386fc';
                      break;
                  case "pptx":
                  case "pptm":
                  case "ppt":
                      $fileclass = 'file-powerpoint';
					  $icon_color = '#f4b400';
                      break;
                  case "xlsx":
                  case "xlsm":
                  case "xls":
                      $fileclass = 'file-excel';
					  $icon_color = 'green';
                      break;
                  case "doc":
                  case "docm":
                  case "docx":
                  case "odt":
                  case "rtf":
                  case "txt":
                      $fileclass = 'document-text';
                      break;
                  default:
                      $fileclass = 'document-text';
                      break;
				}

				$icon =  $file['icon'];

		?>
				<div class="resource">
					<a href="<?php echo esc_url( $url ) ?>">
						<i style="color:<?php echo $icon_color ?>; " class="mdi mdi-<?php echo $fileclass ?>"></i>
						<h5><?php echo $title; ?></h5>
						 <?php the_content(); ?>
					</a>
				</div>
		<?php
			endwhile;
			wp_reset_query();


    die();

}

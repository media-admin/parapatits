<?php
/**
 * Theme Funktionen und allgemeine Definitionen für die Website "parapatits.at"
 */

/* --- General Theme Functions --- */
function parapatits_theme_features() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'gallery' ) );
}

add_action('initafter_setup_theme', 'parapatits_theme_features');



/* --- Make default excerpt available --- */
function parapatits_add_excerpts_to_pages() {
		add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'parapatits_add_excerpts_to_pages' );


/* --- Make Custom Background available --- */
add_theme_support( 'custom-background' );


/* --- Activate Thumbnail Images --- */
if ( ! function_exists( 'theme_slug_setup' ) ) :
 function theme_slug_setup() {
	add_theme_support( 'post-thumbnails' );
}
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );


/* --- Includes the Custom Shortcode Bibliothek of the actual Theme --- */
include( 'classes/custom-shortcodes.php' );


/* --- Support SVG Files --- */
function parapatits_add_upload_ext($checked, $file, $filename, $mimes){
	if(!$checked['type']){
		$wp_filetype = wp_check_filetype( $filename, $mimes );
		$ext = $wp_filetype['ext'];
		$type = $wp_filetype['type'];
		$proper_filename = $filename;

		if($type && 0 === strpos($type, 'image/') && $ext !== 'svg'){
			$ext = $type = false;
		}
		$checked = compact('ext','type','proper_filename');
	}
	return $checked;
}

add_filter('wp_check_filetype_and_ext', 'parapatits_add_upload_ext', 10, 4);





/* --- Defines the default expression for the "Read More"-Link --- */
function parapatits_read_more_text( $text, $post_id ) {
	return '<a class="more-link" href="' . get_permalink() . '">' . __( 'Read More' , 'parapatits' ) . '</a>';
}

add_filter( 'the_content_more_link', 'parapatits_read_more_text', 10, 2 );


/* --- Replaces the IP address at comments (IP-Anonymisierung lt. DSGVO) --- */
function parapatits_replace_comment_ip() {
	 return "127.0.0.1";
}

add_filter( 'pre_comment_user_ip', 'parapatits_replace_comment_ip', 50);



/* Adding Widget Support */
/**
* Register our sidebars and widgetized areas.

function medialab_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'medialab_widgets_init' );
*/



/* --- Adds the Slug to the body tag's class --- */
function parapatits_add_slug_body_class( $classes ) {
	 global $post;
	if ( isset( $post ) ) {
	 $classes[] = $post->post_name;
	}
	return $classes;
}

add_filter( 'body_class', 'parapatits_add_slug_body_class' );



/* === Styles and Scripts === */
function parapatits_register_styles() {

	/* --- Import Cookie Script Stylesheets --- */
	wp_register_style( 'styles', get_template_directory_uri() . '/styles.c0eb9b412b450fe4bb20.css' );
	wp_enqueue_style( 'styles' );


	/* --- Import Theme Styles via style.css --- */
	wp_register_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'parapatits_register_styles' );



function parapatits_register_scripts() {

	/* --- Import Main Scripts --- */
	wp_register_script( 'main', get_template_directory_uri() . '/main.c0eb9b412b450fe4bb20.js', '', null, true );
	wp_enqueue_script( 'main' );

	/* --- Import Lightbox Scripts --- */
	wp_register_script( 'lightbox', get_template_directory_uri() . '/assets/vendor/lightbox2/dist/js/lightbox.js', '', null, true );
	wp_enqueue_script( 'lightbox' );

	/* --- Import Slick Scripts --- */
	wp_register_script( 'slick', get_template_directory_uri() . '/assets/vendor/slick-1.8.1/slick/slick.min.js', '', null, true );
	wp_enqueue_script( 'slick' );

	/* --- Import Vendors Scripts --- */
	wp_register_script( 'vendors', get_template_directory_uri() . '/vendors.b86e0341894c80fe39c1.js', '', null, true );
	wp_enqueue_script( 'vendors' );

	/* --- Import Modal Scripts --- */
	wp_register_script( 'modal', get_template_directory_uri() . '/modal.86995f46e4f29a4ce8c3.js', '', null, true );
	wp_enqueue_script( 'modal' );

	// Import Button Back-to-Top
	wp_register_script( 'button-back-to-top', get_template_directory_uri() . '/assets/scripts/button-back-to-top.js', '', null, true );
	wp_enqueue_script( 'button-back-to-top' );

}

add_action( 'wp_enqueue_scripts', 'parapatits_register_scripts' );


/* Support einer jeweils eigenen single.php nach Kategorie

add_filter('single_template', 'check_for_category_single_template');

function check_for_category_single_template( $t ) {
	foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
		if($cat->parent) {
			$cat = get_the_category_by_ID( $cat->parent );
			if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
		}
	}
	return $t;
}
*/


/* --- Menu Support --- */

function parapatits_register_menu() {
	register_nav_menu( 'nav-menu-main', 'Hauptnavigation', 'parapatits' );
	register_nav_menu( 'nav-menu-footer', 'Footermenü', 'parapatits' );
}

add_action( 'init', 'parapatits_register_menu' );


/* === Additional Functions === */

/* --- Makes showing the gallery thumbnails available --- */
function parapatits_get_backend_preview_thumb($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
		$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
		return $post_thumbnail_img[0];
	}
}

function parapatits_preview_thumb_column_head($defaults) {
	$defaults['featured_image'] = 'Image';
	return $defaults;
}

add_filter('manage_posts_columns', 'parapatits_preview_thumb_column_head');


function parapatits_preview_thumb_column($column_name, $post_ID) {
	if ($column_name == 'featured_image') {
		$post_featured_image = parapatits_get_backend_preview_thumb($post_ID);
			if ($post_featured_image) {
				echo '<img src="' . $post_featured_image . '" />';
			}
	}
}

add_action('manage_posts_custom_column', 'parapatits_preview_thumb_column', 10, 2);



/* --- Extends CPT PROJECTS to make Tags available --- */
add_action('pre_get_posts', function($query) {
	// This will target the queries used to generate the tag archive template.
	// You may remove the `is_main_query()` condition if you want to get posts
	// by tag outside the loop.
	if (!is_admin() && is_tag() && $query->is_main_query()) {
		// Will set to something like: Array( 'post', 'portfolio' )
		$types = get_taxonomy('post_tag')->object_type;

		// Alter the query to only use the types which are registered to the
		// `post_tag` taxonomy.
		$query->set('project', $types);
	}
});



/* --- Register Google Maps --- */

// Method 1: Filter.
	function my_acf_google_map_api( $api ){
			$api['key'] = 'XXX';
			return $api;
	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

	// Method 2: Setting.
	function my_acf_init() {
			acf_update_setting('google_api_key', 'AIzaSyAzkr3qs7g4-R6ShYWXKiJ5JZ_i5orikC8');
	}
	add_action('acf/init', 'my_acf_init');





	/* --- Navigation Walker for HAUPTNAVIGATION --- */
	require_once( 'classes/navwalker.php' );
	require_once( 'classes/custom_navwalker.php' );




	/* --- Navigation Walker for FOOTERMENÜ --- */
	class Footer_Walker extends Walker_Nav_Menu {

		function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

		$classes = empty($item->classes) ? array () : (array) $item->classes;

		$class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );

			!empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';

			$output .= '<li class="site-footer__navigation-list-item">';
			$attributes  = 'class="footer-navigation__item"';

			!empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
			!empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
			!empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
			!empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
			$title = apply_filters( 'the_title', $item->title, $item->ID );
			$item_output = $args->before
				. "<a  $attributes>"
				. $args->link_before
				. $title
				. '</a></li>'
				. $args->link_after
				. $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

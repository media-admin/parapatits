<?php
/**
 * Theme Funktionen und allgemeine Definitionen für die Website "bauschild.at"
 */

/* --- General Theme Functions --- */
function medialab_theme_features() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'gallery' ) );
}

add_action('initafter_setup_theme', 'medialab_theme_features');



/* --- Make default excerpt available --- */
function medialab_add_excerpts_to_pages() {
		add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'medialab_add_excerpts_to_pages' );


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
function medialab_add_upload_ext($checked, $file, $filename, $mimes){
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

add_filter('wp_check_filetype_and_ext', 'medialab_add_upload_ext', 10, 4);





/* --- Defines the default expression for the "Read More"-Link --- */
function medialab_read_more_text( $text, $post_id ) {
	return '<a class="more-link" href="' . get_permalink() . '">' . __( 'Read More' , 'parapatits' ) . '</a>';
}

add_filter( 'the_content_more_link', 'medialab_read_more_text', 10, 2 );


/* --- Replaces the IP address at comments (IP-Anonymisierung lt. DSGVO) --- */
function medialab_replace_comment_ip() {
	 return "127.0.0.1";
}

add_filter( 'pre_comment_user_ip', 'medialab_replace_comment_ip', 50);



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
function medialab_add_slug_body_class( $classes ) {
	 global $post;
	if ( isset( $post ) ) {
	 $classes[] = $post->post_name;
	}
	return $classes;
}

add_filter( 'body_class', 'medialab_add_slug_body_class' );





/* === Styles and Scripts === */
function medialab_register_styles() {

	// --- Import Normalizer  ---
	wp_register_style( 'normalize', get_template_directory_uri() . '/assets/styles/normalize.css' );
	wp_enqueue_style( 'normalize' );

	// --- Import FontAwesome Styles ---
	wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/styles/fontawesome-all.css' );
	wp_enqueue_style( 'fontawesome' );


	// --- Import Slick Styles ---
	wp_register_style( 'slick', get_template_directory_uri() . '/assets/styles/slick.css' );
	wp_enqueue_style( 'slick' );

	wp_register_style( 'slick-theme', get_template_directory_uri() . '/assets/styles/slick-theme.css' );
	wp_enqueue_style( 'slick-theme' );


	// --- Import Import Cookie Script Stylesheets ---
	wp_register_style( 'cookie-style', get_template_directory_uri() . '/assets/styles/dywc.css' );
	wp_enqueue_style( 'cookie-style' );

	// --- Import style.css ---
	wp_register_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'medialab_register_styles' );


function medialab_register_scripts() {

	// --- Import JQery 1.4.3 ---
	wp_register_script( 'jquery-1-4-3', get_template_directory_uri() . '/assets/scripts/jquery.min.js', '', null, true );
	wp_enqueue_script( 'jquery-1-4-3' );


	// --- Import JQery 1.11.0 ---
	wp_register_script( 'jquery-1-11-0', '//code.jquery.com/jquery-1.11.0.min.js', '', null, true );
	wp_enqueue_script( 'jquery-1-11-0' );


	// --- Import JQery Migrate 1.2.1 ---
	wp_register_script( 'jquery--migrate-1-2-1', '//code.jquery.com/jquery-migrate-1.2.1.min.js', '', null, true );
	wp_enqueue_script( 'jquery--migrate-1-2-1' );


	// --- Import Button Back-to-Top ---
	wp_register_script( 'button-back-to-top', get_template_directory_uri() . '/assets/scripts/button-back-to-top.js', '', null, true );
	wp_enqueue_script( 'button-back-to-top' );


	// --- Import Cookie Notice Scripts ---
	wp_register_script( 'cookie-notice', get_template_directory_uri() . '/assets/scripts/dywc.js', '', null, true );
	wp_enqueue_script( 'cookie-notice' );


	// --- Import Slick Scripts ---
	wp_register_script( 'slick', get_template_directory_uri() . '/assets/scripts/slick.js', '', null, true );
	wp_enqueue_script( 'slick' );

}

add_action( 'wp_enqueue_scripts', 'medialab_register_scripts' );


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




/* === NAVIGATION === */

/* --- Navigation Walker for HAUPTNAVIGATION --- */
require_once( 'classes/bulma-navwalker.php' );


/* --- Navigation Walker for FOOTERMENÜ --- */
class Footer_Walker extends Walker_Nav_Menu {

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

	$classes = empty($item->classes) ? array () : (array) $item->classes;

	$class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );

		!empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= "<li>";
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



/* --- Menu Support --- */
function medialab_register_menu() {
	register_nav_menu( 'nav-menu-main', 'Hauptnavigation', 'parapatits' );
	register_nav_menu( 'footer-menu', 'Footermenü', 'parapatits' );
}

add_action( 'init', 'medialab_register_menu' );




/* === Additional Functions === */

/* --- Makes showing the gallery thumbnails available --- */
function medialab_get_backend_preview_thumb($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
		$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
		return $post_thumbnail_img[0];
	}
}

function medialab_preview_thumb_column_head($defaults) {
	$defaults['featured_image'] = 'Image';
	return $defaults;
}
add_filter('manage_posts_columns', 'medialab_preview_thumb_column_head');

function medialab_preview_thumb_column($column_name, $post_ID) {
	if ($column_name == 'featured_image') {
		$post_featured_image = medialab_get_backend_preview_thumb($post_ID);
			if ($post_featured_image) {
				echo '<img src="' . $post_featured_image . '" />';
			}
	}
}
add_action('manage_posts_custom_column', 'medialab_preview_thumb_column', 10, 2);






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


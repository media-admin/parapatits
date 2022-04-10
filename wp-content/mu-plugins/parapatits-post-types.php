<?php

/* --- PARAPATITS CUSTOM POST TYPES --- */

function parapatits_post_types() {

	add_post_type_support( 'team', 'thumbnail' );
	add_post_type_support( 'team', 'excerpt' );

	add_filter( 'parapatits_gallery_metabox_post_types', function( $types ) {
		$types[] = 'gallery';
		return $types;
	} );


	/* Custom Post Type "HINWEISE" */

	register_post_type( 'notification', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => array(
			'name' =>  'Hinweise',
			'add_new' => 'Neuen Hinweis erstellen',
			'edit_item' => 'Hinweis bearbeiten',
			'singular_name' => 'Hinweis',
			'all_items' => 'Alle Hinweise',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'hinweise'),
		'menu_position' => 5,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-bell'
	));


	/* Custom Post Type "SLIDER" */

	add_post_type_support( 'slider', 'thumbnail' );

	register_post_type( 'slider', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => array(
			'name' =>  'Header Slider',
			'add_new' => 'Neues Slider-Bild erstellen',
			'edit_item' => 'Slider-Bild bearbeiten',
			'singular_name' => 'Slider',
			'all_items' => 'Alle Slider',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'sliders'),
		'menu_position' => 7,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-superhero'
	));


	/* Custom Post Type "TESTIMONIALS" */

	add_post_type_support( 'testimonial', 'thumbnail' );

	register_post_type( 'testimonial', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => array(
			'name' =>  'Testimonials',
			'add_new' => 'Neues Testimonal erstellen',
			'edit_item' => 'Testimonial bearbeiten',
			'singular_name' => 'Testimonial',
			'all_items' => 'Alle Testimonials',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'testimonial'),
		'menu_position' => 8,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-format-quote'
	));



	/* Custom Post Type "PRODUKTE" */

	add_post_type_support( 'products', 'thumbnail' );

	register_post_type( 'products', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'product-category' ),
		'labels' => array(
			'name' =>  'Produkt-Arten',
			'add_new' => 'Neue Produkt-Art hinzufügen',
			'edit_item' => 'Produkt-Art bearbeiten',
			'singular_name' => 'Produkt-Art',
			'all_items' => 'Alle Produkt-Arten',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => true,
		'exclude_from_search' => false,
		// 'rewrite' => array('slug' => 'produkte', 'with_front' => true, 'pages' => true, 'feeds' => true,),
		'menu_position' => 6,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-editor-table'
	));


	add_post_type_support( 'team-members', 'thumbnail' );

	register_post_type( 'team-members', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => array(
			'name' =>  'Team-Mitglieder',
			'add_new' => 'Neues Team-Mitglied hinzufügen',
			'edit_item' => 'Team-Mitglied bearbeiten',
			'singular_name' => 'Team-Mitglied',
			'all_items' => 'Alle Team-Mitglieder',
			'supports' => array('title', 'editor', 'author', 'custom-fields', ),
		),
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'team-members'),
		'menu_position' => 7,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-id'
	));

}



/* --- PARAPATITS CUSTOM TAXONOMIES --- */

function parapatits_taxonomies() {

	/* Custom Taxonomie "PRODUKT-KATEGORIE" */

	 $labels = array(
		'name' => _x( 'Produkt-Kategorien', 'taxonomy general name' ),
		'singular_name' => _x( 'Produkt-Kategorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'Produkt-Kategorien durchsuchen' ),
		'popular_items' => __( 'Meist benutzte Produkt-Kategorien' ),
		'all_items' => __( 'Alle Produkt-Kategorien' ),
		'parent_item' => __( 'Übergeordnete Produkt-Kategorie' ),
		'parent_item_colon' => __( 'Übergeordnete Produkt-Kategorien:' ),
		'edit_item' => __( 'Produkt-Kategorie bearbeiten' ),
		'update_item' => __( 'Produkt-Kategorien aktualisieren' ),
		'add_new_item' => __( 'Neue Produkt-Kategorie hinzufügen' ),
		'new_item_name' => __( 'Name der neuen Produkt-Kategorie' ),
	);


	register_taxonomy('product-category', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'query_var' => true,
		// 'rewrite' => array( 'slug' => 'produkte' ),
	));

}

add_action('init', 'parapatits_post_types');

add_action( 'init', 'parapatits_taxonomies', 0 );

?>
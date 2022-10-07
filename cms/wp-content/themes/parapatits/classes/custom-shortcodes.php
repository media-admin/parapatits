<?php

function shortcode_just_call() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_just-call');
	return ob_get_clean();
}

add_shortcode( 'shortcode_just_call', 'shortcode_just_call' );


function shortcode_recall() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_recall');
	return ob_get_clean();
}

add_shortcode( 'shortcode_recall', 'shortcode_recall' );


function shortcode_contact_form() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_contact-form');
	return ob_get_clean();
}

add_shortcode( 'shortcode_contact_form', 'shortcode_contact_form' );


function shortcode_special_question() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_special-question');
	return ob_get_clean();
}

add_shortcode( 'shortcode_special_question', 'shortcode_special_question' );


function shortcode_our_values() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_our-values');
	return ob_get_clean();
}

add_shortcode( 'shortcode_our_values', 'shortcode_our_values' );


function shortcode_jobs() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_jobs');
	return ob_get_clean();
}

add_shortcode( 'shortcode_jobs', 'shortcode_jobs' );


function shortcode_partner_tischlerei() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-tischlerei');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_tischlerei', 'shortcode_partner_tischlerei' );


function shortcode_partner_bestattung() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_partner-bestattung');
	return ob_get_clean();
}

add_shortcode( 'shortcode_partner_bestattung', 'shortcode_partner_bestattung' );


function shortcode_your_opinion() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_your-opinion');
	return ob_get_clean();
}

add_shortcode( 'shortcode_your_opinion', 'shortcode_your_opinion' );


function shortcode_testimonials_tischlerei() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_testimonials-tischlerei');
	return ob_get_clean();
}

add_shortcode( 'shortcode_testimonials_tischlerei', 'shortcode_testimonials_tischlerei' );


function shortcode_testimonials_bestattung() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_testimonials-bestattung');
	return ob_get_clean();
}

add_shortcode( 'shortcode_testimonials_bestattung', 'shortcode_testimonials_bestattung' );


function shortcode_faqs() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_faqs');
	return ob_get_clean();
}

add_shortcode( 'shortcode_faqs', 'shortcode_faqs' );


function shortcode_projects_slider() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_projects-slider');
	return ob_get_clean();
}

add_shortcode( 'shortcode_projects_slider', 'shortcode_projects_slider' );



function shortcode_projects_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_projects-overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_projects_overview', 'shortcode_projects_overview' );




function show_tags()
{
	$post_tags = get_the_tags();
	$separator = ' | ';
	if (!empty($post_tags)) {
		foreach ($post_tags as $tag) {
			$output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
		}
		return trim($output, $separator);
	}
}



function all_posts_shortcode() {

	//Parameter für Posts
	$args = array(
		'category' => '',
		'numberposts' => 6,
		'post_status' => 'publish',
		'orderby'   => 'id',
		'order' => 'ASC',
	);

	//Posts holen
	$posts = get_posts($args);

	//Inhalte sammeln
	$content = '';
	foreach ($posts as $post) {

		$content .= '<div class="card column is-one-third">';
		$content .= '<div class="card-image">';
		$content .= '<a class="" href="'.get_permalink($post->ID).'">';
		$content .= '<figure class="image">';
		$content .= '<img  alt="Beitragsbild" src="'.get_the_post_thumbnail_url($post->ID, 'full').'"';
		$content .= '</figure>';
		$content .= '</a>';
		$content .= '</div>';
		$content .= '<div class="card-content">';
		$content .= '<div class="media">';
		$content .= '<div class="media-content">';
		$content .= '<p class="author is-6">Veröffentlicht am <span class="meta__date-published"><time datetime="d.m.Y">'.get_post_time('d.m.Y', $post->ID ).'</time></span></p>';
		$content .= '<a class="" href="'.get_permalink($post->ID).'"><p class="title is-4">'.$post->post_title.'</p></a>';
		$content .= '<p class="author is-6">Verfasser <span class="meta__author">'.get_the_author($post->ID).'</span></p>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '<div class="content">';
		$content .= '<small class="tags">';
		$content .= '<div class="tags">';
		$content .= '<code class="tag is-danger">';
		$content .= '<i class="fas fa-tags"></i>';
		$content .= '</code>';

		$post_tags = get_the_tags($post->ID);


		if (!empty($post_tags)) {
			foreach ($post_tags as $tag) {
				$content .= '<span class="tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
			}
		}

		$content .= '</div>';
		$content .= '</small>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';

	}

	//Inhalte übergeben
	return $content;

}

add_shortcode( 'all_posts', 'all_posts_shortcode' );

?>
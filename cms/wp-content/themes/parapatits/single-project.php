<?php
/**
* Template Name: Projects
*/

get_header();
?>

<main class="site-main">
	<div class="single-project site-content">
		<h1 class="single-project__title site-title h1__title">
			<?php the_title();?>
		</h1>

		<div class="single-project__container wrapper">
			<p class="single-project__meta h2__subheading"><?php the_field('project-city');?> - <?php the_field('project-date');?></p>
			<p class="single-project__summary"><?php the_field('project-summary');?></p>
		</div>

		<?php
			$image_id = get_post_thumbnail_id(get_the_ID());
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);
		?>

		<img class="single-project__img lazyload" src="<?php echo $featured_img_url; ?>" alt="<?php echo $alt_text ;?>">

		<div class="single-project__content-wrapper wrapper">
			<blockquote class="single-project__quote">
					<?php the_field('project-cite');?>
			</blockquote>
			<cite class="single-project__quote-author">
					<?php the_field('project-cite-author');?>
			</cite>

			<div class="single-project__content-container">
			<?php
				global $post;
				$content = apply_filters('the_content',$post->post_content);
				echo $content;
			?>
			</div>
		</div>

		<section class="single-project__more-projects">
			<article class="wrapper">
				<h2 class="h2__heading">Weitere Projekte</h2>
				<?php echo do_shortcode("[shortcode_projects_slider]"); ?>
			</article>
		</section>

		<?php echo do_shortcode("[shortcode_recall]"); ?>

	</div>

</main>

<?php get_footer(); ?>
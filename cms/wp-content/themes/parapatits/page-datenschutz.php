<?php
/**
* Template Name: Seite Datenschutz
*/

get_header();
?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<div class="wrapper">
						<?php the_content(); ?>
					</div>
				</article>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
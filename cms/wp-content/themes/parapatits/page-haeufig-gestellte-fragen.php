<?php
/**
* Template Name: Seite FAQs
*/

get_header( 'tischlerei' );
?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Fragen, die wir schon mehr als einmal beantworten durften.</p>
				</article>
			</section>

			<section id="accordion" class="wrapper">

					<?php

					$args = array(
						'post_status' => 'publish',
						'posts_per_page' => 999,
						'offset' => 1,
						'post_type' => 'faq',
						'faq-category' => 'allgemeine-frage'
					);

					$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<article class="accordion__item">
							<button class="accordion"><?php the_title();?><p class="accordion__pointer"><i class="arrow down"></i></p></button>
							<div class="panel">
								<p><?php the_content();?></p>
							</div>
						</article>

						<?php endwhile; ?>

						<?php
						wp_reset_postdata();
						?>

			</section>

			<?php echo do_shortcode("[shortcode_special_question]"); ?>

			<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/haeufig-gestellte-fragen/parapatits-tischlerei_komp-41-DSC03470_web.jpg" alt="Platzhalter-Bild">

			<?php echo do_shortcode("[shortcode_our_values]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
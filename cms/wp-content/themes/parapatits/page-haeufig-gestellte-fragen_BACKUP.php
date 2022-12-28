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
					'posts_per_page' => 1,
					'post_type' => 'faq',
					'faq-category' => 'allgemeine-frage'
				);

				$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<article class="accordion__item">
						<h2 class="accordion__headline""><a href="#"><?php the_title();?></a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
						<div class="accordion_content wrapper">
							<p><?php the_content();?></p>
						</div>
					</article>

					<?php endwhile; ?>

					<?php
					wp_reset_postdata();
					?>

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

						<article class="accordion__item accordion__item-hidden">
							<h2 class="accordion__headline""><a href="#"><?php the_title();?></a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
							<div class="accordion_content wrapper">
								<p><?php the_content();?></p>
							</div>
						</article>

						<?php endwhile; ?>

						<?php
						wp_reset_postdata();
						?>




				<!-- <article class="accordion__item">
					<h2 class="accordion__headline""><a href="#">Frage 01</a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
					<div class="accordion_content wrapper">
						<p>Antwort 01</p>
					</div>
				</article>
				<article class="accordion__item accordion__item-hidden">
					<h2 class="accordion__headline""><a href="#">Frage 02</a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
					<div class="accordion_content wrapper">
						<p>Antwort 02</p>
					</div>
				</article>
				<article class="accordion__item accordion__item-hidden">
					<h2 class="accordion__headline""><a href="#">Frage 03</a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
					<div class="accordion_content wrapper">
						<p>Antwort 03</p>
					</div>
				</article> -->




			</section>

			<?php echo do_shortcode("[shortcode_special_question]"); ?>

			<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/haeufig-gestellte-fragen/parapatits-tischlerei_komp-41-DSC03470_web.jpg" alt="Tischlerei Werkstatt">

			<?php echo do_shortcode("[shortcode_our_values]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
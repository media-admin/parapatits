<?php
/**
* Template Name: Seite Jobs
*/

get_header();
?>

	<main class="site-main">
		<section class="site-intro box--left-aligned unstacked-wrapper">
			<div class="unstacked-left">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Werde Teil unseres Teams!</p>
				</article>
			</div>
			<div class="unstacked-rigth">
				<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/jobs/parapatits-tischlerei_komp-32-DSC03424_web.jpg" alt="Bild">
			</div>
		</section>

		<section class="box--left-aligned">
			<h2 class="h2__heading wrapper">Offene Stellen</h2>

			<?php

			$args = array(
				'post_status' => 'publish',
				'posts_per_page' => 1,
				'post_type' => 'job',
			);

			$loop = new WP_Query( $args );

			if ($loop->have_posts() ) {

				while ( $loop->have_posts() ) : $loop->the_post();

					global $post;
					$content = apply_filters('the_content', wpautop($post->post_content)); ?>

					<article class="job__container wrapper">
						<div class="job__image">
							<?php the_post_thumbnail('full', ['class' => '']); ?>
						</div>
						<div class="job__description wrapper">
							<h3 class="job__title h3__heading"><?php the_title();?></h3> <!-- TODO 'Check if h3 format is correct -->
							<?php echo $content; ?>
							<a class="job__application-button btn btn--red" role="button" href="mailto:bewerbung@parapatits.at?subject='Bewerbung über die Website'">Bewerbung mailen</a>
						</div>
					</article>

				<?php endwhile; ?>

				<?php
				wp_reset_postdata();

			} else { ?>
				<article class="job__container wrapper">
					<div class="job__image">

					</div>
					<div class="job__description wrapper">
						<h3 class="job__title h3__heading">Aktuell ist unser Team komplett</h3>
						<p class="">
							Zur Zeit sind leider keine offenen Stellen vorhanden. Wir freuen uns aber trotzdem auf Ihre Initiativbewerbung.
						</p>
						<a class="btn btn--red" role="button" href="mailto:bewerbung@parapatits.at?subject='Bewerbung über die Website'">Bewerbung mailen</a>
					</div>
				</article>
			<?php
			} ?>

		<div class="unstacked-wrapper">
			<div class="unstacked-right">
				<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/jobs/parapatits-tischlerei_komp-48-DSC03529_web.jpg" alt="Platzhalter-Bild">
			</div>
			<div class="unstacked-left">
				<section class="box--left-aligned">
					<article class="wrapper">
						<div class="">
							<h2 class="h2__heading">Betrieb ansehen</h2>
							<p class="">
								Melde dich bei uns und wir zeigen dir erstmal unseren Betrieb.
							</p>
						</div>
						<a class="btn btn--red" role="button" href="/kontakt">Kontakt</a>
					</article>
				</section>
			</div>
		</div>

		<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
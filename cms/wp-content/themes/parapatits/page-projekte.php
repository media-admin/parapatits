<?php
/**
* Template Name: Seite Projekte
*/

get_header( 'tischlerei' );
?>

		<main class="site-main">
			<div class="site-content">

				<section class="projects site-intro">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Räume zum Durchstöbern</p>
						<div class="wrapper">
							<p class="">
								Hier zeigen wir her was wir können. Wir bieten einige Räume zum Durchstöbern. Von Wohnküchen über Wohlfühlbüros bis hin zum ganz persönlichen Rückzugsort.
							</p>
						</div>
						<?php echo do_shortcode("[shortcode_projects_overview]"); ?>
					</article>
				</section>

				<?php echo do_shortcode("[shortcode_faqs]"); ?>

				<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/cut-for-webhighres-23-DSC03459_web.jpg" alt="Platzhalter-Bild">

				<?php echo do_shortcode("[shortcode_recall]"); ?>

			</div>
		</main>

	<?php get_footer(); ?>
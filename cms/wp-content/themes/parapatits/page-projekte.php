<?php
/**
* Template Name: Seite Projekte
*/

get_header( 'tischlerei' );
?>

	<main class="site-main">
		<div class="site-content">
			<section class="projects site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left unstacked-left--content">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Räume zum Durchstöbern</p>
						<div class="">
							<p class="wrapper">
								Hier zeigen wir her was wir können. Wir bieten einige Räume zum Durchstöbern. Von Wohnküchen über Wohlfühlbüros bis hin zum ganz persönlichen Rückzugsort.
							</p>
						</div>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/cut-for-web_highres-8-DOC002_web.jpg" alt="Platzhalter-Bild">
				</div>

			</section>

			<?php echo do_shortcode("[shortcode_projects_overview]"); ?>

			<section class="box--centered unstacked-wrapper">
				<div class="unstacked-left unstacked-left--content">
					<?php echo do_shortcode("[shortcode_faqs]"); ?>
				</div>
				<div class="unstacked-right">
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/cut-for-webhighres-23-DSC03459_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
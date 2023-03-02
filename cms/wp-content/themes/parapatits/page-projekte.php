<?php
/**
 * Template Name: Seite Projekte
 */

get_header("tischlerei"); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="projects site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left unstacked-left--content">
					<article data-inviewport="entrance-fade-right" class="wrapper entrance-fade-right">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wahrgewordene Lebens(t)räume.</p>
						<div class="">
							<p class="">
								Hier zeigen wir, was wir können. Werfen Sie einen Blick in von uns umgesetzte Wohnträume, von Wohnküchen über Wohlfühlbüros bis hin zu ganz persönlichen Rückzugsorten.
							</p>
						</div>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--centered lazyload entrance-fade-center" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/tischlerei/projekte/cut-for-web_highres-8-DOC002_web.jpg" alt="Wohlfühlräume mit Herz">
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_projects_overview]"); ?>

			<section class="box--centered unstacked-wrapper">
				<div class="unstacked-right">
					<img class="img--centered add-margin-bottom--small lazyload rellax" data-rellax-speed="-2" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/tischlerei/projekte/cut-for-webhighres-23-DSC03459_web.jpg" alt="Werkstatt die für Besichtigung der Möbel offen steht">
				</div>
				<div class="unstacked-left unstacked-left--content">
					<?php echo do_shortcode("[shortcode_faqs]"); ?>
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer();
?>

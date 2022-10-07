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

				<?php echo do_shortcode("[shortcode_projects_slider]"); ?>

				<section class="box--right-aligned">
					<article class="wrapper">
						<img class="img--project-overview-right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 1</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<img class="img--project-overview-left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 2</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<img class="img--project-overview-right-aligned" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 3</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<img class="img--project-overview-left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 4</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<img class="img--project-overview-right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 5</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<?php echo do_shortcode("[shortcode_faqs]"); ?>

				<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="Platzhalter-Bild">

				<?php echo do_shortcode("[shortcode_recall]"); ?>

			</div>
		</main>

	<?php get_footer(); ?>
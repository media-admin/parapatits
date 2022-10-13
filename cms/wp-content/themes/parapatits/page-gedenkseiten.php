<?php
/**
* Template Name: Seite Gedenkseiten
*/

get_header( 'bestattung' );
?>

	<main class="site-main">
		<div class="site-content">
			<div class="unstacked-wrapper">
				<section class="site-intro box--left-aligned">
					<div class="unstacked-left">
						<article class="wrapper">
							<h1 class="site-title h1__title">Gedenkseiten auf Viternity</h1>
							<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Zünden Sie eine Kerze für Ihre Liebsten an.</p>
							<div class="wrapper">
								<a class="btn btn--red btn--centered-aligned" role="button" href="https://www.viternity.org/de/gedenkseiten/gedenkseiten-nach-kategorie/bestattung-parapatits-9.html" target="_blank">Gedenkseiten aufrufen</a>
							</div>
						</article>
					</div>
				</section>
				<div class="unstacked-right">
					<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/gedenkseiten/cut-for-web_highres-11-DSC03317_web.jpg" alt="Platzhalter-Bild">
				</div>
			</div>

			<section class="box--left-aligned">
				<article class="wrapper">
					<h2 class="">Unsere Leistungen</h2>
					<div class="">
						<p class="">
							Erfahren Sie, wie wir Sie unterstützen können.
						</p>
						<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/leistungen.html', '_blank')">Leistungen anzeigen</button>
					</div>
				</article>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
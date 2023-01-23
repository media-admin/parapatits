<?php
/**
 * Template Name: Seite Gedenkseiten
 */

get_header("bestattung"); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title">Gedenkseiten auf Viternity</h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Zünden Sie eine Kerze für Ihre Liebsten an.</p>
						<div class="">
							<a class="btn btn--red btn--centered-aligned" role="button" href="https://www.viternity.org/de/gedenkseiten/gedenkseiten-nach-kategorie/bestattung-parapatits-9.html" target="_blank">Gedenkseiten aufrufen</a>
						</div>
					</article>
				</div>
				<div class="unstacked-right">
					<div class="img--centered lazyload">
						<img data-inviewport="entrance-fade-center" class="img--centered lazyload" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/gedenkseiten/cut-for-web_highres-11-DSC03317_web.jpg" alt="Denken Sie mit Viternity an Ihre Liebsten">
					</div>
				</div>
			</section>

			<section class="box--centered unstacked-wrapper">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="">Unsere Leistungen</h2>
						<div data-inviewport="entrance-fade-bottom" class="">
							<p class="">
								Erfahren Sie, wie wir Sie unterstützen können.
							</p>
							<!-- <button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/leistungen.html', '_blank')">Leistungen anzeigen</button> -->
							<a data-inviewport="entrance-fade-bottom" class="btn btn--red btn--centered-aligned" role="button" href="/unsere-leistungen">Leistungen anzeigen</a>
						</div>
					</article>
				</div>
				<div class="unstacked-left">
					<img class="img--centered img--wood-square-before lazyload" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/bestattung/gedenkseiten/cut-for-web_highres-7-DSC03394_web.jpg" alt="Persönliche Bestattung">
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>

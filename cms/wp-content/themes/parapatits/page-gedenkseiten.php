<?php
/**
* Template Name: Seite Gedenkseiten
*/

get_header('bestattung');
?>

			<main class="site-main">
				<div class="site-content">
					<section class="site-intro box--left-aligned">
						<article class="wrapper">
							<h1 class="site-title h1__title">Gedenkseiten auf Viternity</h1>
							<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Zünden Sie eine Kerze für Ihre Liebsten an.</p>
							<div class="wrapper">
								<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('https://www.viternity.org/de/gedenkseiten/gedenkseiten-nach-kategorie/bestattung-parapatits-9.html', '_blank')">Gedenkseiten aufrufen</button>
							</div>
						</article>
						<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--left-aligned">
						<article class="wrapper">
							<h2 class="">Unsere Leistungen</h2>
							<div class="wrapper">
								<p class="">
									Erfahren Sie, wie wir Sie unterstützen können.
								</p>
								<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/leistungen.html', '_blank')">Leistungen anzeigen</button>
							</div>
						</article>
						<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="recall-section wrapper container--darkgray">
						<div class="recall-section__container">
							<h2 class="recall-section__title h2__title h2__light h2__title--left-aligned">Rückruf vereinbaren</h2>
							<p class="">Hinterlassen Sie uns Ihre Nummer, wir rufen Sie gerne zurück.</p>
							<p class="">[ CONTACT FORM ]</p>
							<button class="btn btn--red recall-section__btn" type="button">absenden</button>
						</div>
					</section>
				</div>
			</main>

		<?php get_footer(); ?>
<?php
/**
* Template Name: Seite Leitfaden im Todesfall
*/

get_header('bestattung');
?>

			<main class="site-main">
				<div class="site-content">
					<section class="site-intro box--left-aligned">
						<article class="wrapper">
							<h1 class="site-title h1__title">Leitfaden im Todesfall</h1>
							<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Was tun, wenn ein Familienmitglied stirbt?</p>
						</article>
						<img class="img__centered" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--left-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Leitfaden</h2>
							<div class="">
								<p class="">
									Die erste und wichtigste Aktion ist die <strong>Kontaktaufnahme</strong> mit uns. Danach werden wir Sie um ein persönliches Treffen bei uns bitten. Bitte bringen Sie dabei die <strong>benötigen Dokumente</strong> mit. Alle weiteren Schritte besprechen wir gemeinsam in aller Ruhe, mit Umsicht und Feingefühl.
								</p>
							</div>
						</article>
						<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/weiterfuehrende-infos.html', '_blank')">Dokumente anzeigen</button>
						<img class="img__fullwidth" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--right-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Unsere Leistungen</h2>
							<div class="">
								<p class="">
									Erfahren Sie, wie wir Sie unterstützen können.
								</p>
							</div>
						</article>
						<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/unsere-leistungen.html', '_blank')">Leistungen anzeigen</button>
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
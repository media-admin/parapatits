<?php
/**
* Template Name: Seite Über Uns
*/

get_header('');
?>

			<main class="site-main">
				<div class="site-content">
					<section class="site-intro box--left-aligned">
						<article class="wrapper">
							<h1 class="site-title h1__title">Über uns</h1>
							<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">herzlich, verlässlich, echt.</p>
							<div class="wrapper">
								<p class="">
									Wir sind ein Team, wir sind eine Familie – wir sind die Firma Parapatits. Gegründet im Jahre 1932, sind wir seit über 90 Jahren ein familiengeführtes Unternehmen, bestehend aus einer Tischlereiwerkstätte und einem Bestattungsunternehmen.
								</p>
								<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
								<p class="">
									Unsere Mannschaft besteht aus sechs Mitarbeiterinnen und Mitarbeitern in der Werkstatt und im Büro, den beiden Captains Peter und Doris sowie deren Kindern.
								</p>
							</div>
						</article>
					</section>

					<section class="">
						<article class="wrapper">
							<div class="">
								<h2 class="h2__title h2__title--left-aligned">Warum machen wir das, was wir machen?</h2>
								<p class="h2__subtitle h2__subtitle--left-aligned">Eine Herzensangelegenheit.</p>
							</div>
							<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">

							<h2 class="h2__title h2__title--left-aligned">Tischlerei</h2>
							<p class="h2__subtitle h2__subtitle--left-aligned">Wir gestalten Lebensräume.</p>
							<div class="">
								<p class="">
									Als Tischlerbetrieb haben wir die Mission, die Umgebung unserer Mitmenschen zu verschönern und ihnen den Alltag zu erleichtern – durch funktionelle Räume mit Wohlfühlcharakter.
									Außerdem lieben wir die Arbeit mit dem Naturwerkstoff Holz. Es ist ein Arbeiten mit fast allen Sinnen. Holz hat so viele optische Facetten, der Duft, die Haptik … da kommen wir aus dem Schwärmen gar nicht mehr heraus. Die vielseitigen Einsatzmöglichkeiten des Werkstoffes lassen uns immer wieder staunen.
								</p>
								<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/tischlerei.html', '_blank')">Tischlerei anzeigen</button>
							</div>
							<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
						</article>

						<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="wrapper">
						<h2 class="h2__title h2__title--left-aligned">Bestattung</h2>
						<p class="h2__subtitle h2__subtitle--left-aligned">Wir begleiten Sie.</p>
						<div class="">
							<p class="">
								Unsere Bestattung betreiben wir aus Nächstenliebe. Wir legen großen Wert darauf, dass jeder Mensch eine würdevolle Beisetzung bekommt. Außerdem ist es uns wichtig, Angehörigen Trost und Zuspruch in dieser schwierigen Zeit zu geben.
							</p>
						</div>
						<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/bestattung.html', '_blank')">Bestattung anzeigen</button>
					</section>

					<section class="wrapper">
						<h2 class="h2__title h2__title--left-aligned">Jobs</h2>
						<div class="">
							<p class="">
								Werde Teil unseres Teams!
							</p>
						</div>
						<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/jobs.html', '_blank')">Offene Stellen anzeigen</button>
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
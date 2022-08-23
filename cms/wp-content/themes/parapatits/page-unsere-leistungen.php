<?php
/**
* Template Name: Seite Unsere Leistungen
*/

get_header('bestattung');
?>

		<main class="site-main">
			<div class="site-content">
				<section class="site-intro box--left-aligned">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Erfahren Sie, wie wir Sie unterstützen können.</p>
						<div class="wrapper">
							<p class="">
								Wir wollen Ihnen in diesen schweren Stunden Beistand leisten und stehen Ihnen bei der Planung, Organisation und Durchführung einer Trauerfeier diskret und zuverlässig zur Seite.
								Gemeinsam wickeln wir alle Schritte bis zur Beisetzung ab.
							</p>
						</div>
					</article>
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/unsere-leistungen/parapatits-bestattung_highres-9-DSC03330_web.jpg" alt="Platzhalter-Bild">
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Kontaktaufnahme</h2>
						<div class="wrapper">
							<p class="">
								Kontaktaufnahme mit Krankenhaus oder Pflegeheim, Behörden, Botschaften, Ämtern usw.
							</p>
						</div>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Abholung und Überführung</h2>
						<div class="wrapper">
							<p class="">
								Abholung und Überführung vom Sterbeort (natürlich auch aus dem Ausland) in die jeweilige Aufbahrungshalle.
							</p>
						</div>
					</article>
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Rund um die Trauerfeier</h2>
						<p class="">
								Die gesamte Trauerfeier wird in Zusammenarbeit mit den Angehörigen gestaltet.
						</p>
						<ul class="">
							<li>Terminfindung für die Beisetzung.</li>
							<li>Vermittlung eines Geistlichen bzw. eines Trauerredners für die Trauerfeier.</li>
							<li>Auswahl des Sarges bzw. der Urne. In unseren Schauräumen können Sie aus ca. 25 Modellen wählen.</li>
							<li>Gestaltung und Druck von Parten, Trauerbildern und Danksagungen – individuell und direkt bei uns im Haus.</li>
							<li>Bestellung aller Kränze, Gestecke und Buketts bei zuverlässigen Gärtnern. Anrufe bezüglich Kränze und Buketts bitte nur während der Bürozeiten oder per E-Mail.</li>
							<li>Auf Wunsch wird ein Kondolenzbuch bereitgestellt, welches für die Trauergäste zur Signierung aufliegt.</li>
						</ul>
						<p class="">
								Wir garantieren durch persönliche Anwesenheit bei der Trauerfeier einen reibungslosen und würdevollen Ablauf, ganz in Ihrem Sinne.
						</p>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Sterbe&shy;dokumente</h2>
						<p class="">
							Besorgung der Sterbedokumente am zuständigen Standesamt.
						</p>
					</article>
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Todesanzeigen</h2>
						<p class="">
							Aufgabe von Todesanzeigen in Zeitungen.
						</p>
						</div>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Vorsorge&shy;versicherungen</h2>
						<p class="">
							Abwicklung mit Vorsorgeversicherungen <strong>(Wiener&nbsp;Verein)</strong>
						</p>
					</article>
				</section>

				<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/unsere-leistungen/parapatits-bestattung_highres-16-DSC03351_web.jpg" alt="Platzhalter-Bild">

				<section class="box--left-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Weiterführende Informationen</h2>
						<p class="">
							Alle wichtigen Informationen, übersichtlich für Sie zusammengestellt.
						</p>
						<a class="btn btn--red btn--centered-aligned" role="button" href="/weiterfuehrende-infos">Infos anzeigen</a>
					</article>
				</section>

				<?php echo do_shortcode("[shortcode_recall]"); ?>

			</div>
		</main>

<?php get_footer(); ?>
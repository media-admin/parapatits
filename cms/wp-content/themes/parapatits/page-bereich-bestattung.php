<?php
/**
* Template Name: Seite Bereich Bestattung
*/

get_header('bestattung');
?>

			<main class="site-main">
				<div class="site-content">
					<section class="site-intro box--left-aligned">
						<article class="wrapper">
							<h1 class="site-title h1__title">Bestattung</h1>
							<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir begleiten Sie.</p>
							<div class="wrapper">
								<p class="">
									Der Erhalt der Menschenwürde bis zum Schluss.
								</p>
							</div>
						</article>
						<div class="img__wood-square-before--gray">
							<img class="img__centered img__wood-square-before" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
						</div>
					</section>

					<section class="box--right-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Unser Arbeitsfeld</h2>
							<p class="">
								Als Bestatter ist es unsere Aufgabe, Verstorbene in der richtigen Form zur letzten Ruhe zu geleiten und die Hinterbliebenen mit Erfahrung und Feingefühl zu begleiten.
							</p>
						</article>
						<img class="img__left-aligned" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
						<img class="img__right-aligned" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--left-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Wir unterstützen Sie ganzheitlich</h2>
							<p class="">
								In intensivem, persönlichem Kontakt leiten wir Sie durch diese schwere Zeit und versuchen, Ihnen das Abschiednehmen zu erleichtern. Wir übernehmen die behördlichen Wege und organisieren in enger Abstimmung mit Ihnen alles rund um die Bestattung und Trauerfeier. Sie können sich voll und ganz auf Ihre Trauer und das Abschiednehmen einlassen.
								Oft fehlt den Erwachsenen die Zeit und Kraft, um Minderjährigen zu erklären, was vor sich geht. Wir haben dazu spezielle Weiterbildungen absolviert und kümmern uns einfühlsam um Kinder und Jugendliche.
							</p>
						</article>
						<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--right-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Was ist Ihre Aufgabe?</h2>
							<p class="">
								Nachdem Sie vom Sterbefall erfahren, sollten Sie uns umgehend kontaktieren. Näheres besprechen wir mit Ihnen in aller Ruhe und Schritt für Schritt.
							</p>
						</article>
						<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="section__just-call">
						<article class="wrapper">
							<h2 class="h2__heading">Einfach anrufen</h1>
							<p class="">Wenn Sie einen Sterbefall haben, rufen Sie uns an und wir kümmern uns um alles Weitere.</p>
							<div class="just-call__contact-data">
								<a href="tel:004326182221">+43 2618 / 22 21</a>
								<a href="tel:004326182221">+43 664 / 307 98 28</a>
								<p class="hours-available">Wir sind 24 Stunden am Tag erreichbar.</p>
							</div>
						</article>
						<img class="img__fullwidth" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--right-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Leitfaden im Todesfall</h2>
							<p class="">Was tun, wenn ein Familienmitglied stirbt?</p>
							<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('<?php echo get_home_url(); ?>/leitfaden-im-todesfall', '_blank')">Leitfaden anzeigen</button>
						</article>
						<img class="img__left-aligned" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
					</section>

					<section class="box--left-aligned">
						<article class="wrapper">
							<h2 class="h2__heading"">Was unsere Kunden sagen</h2>
							<div>
								Slider Kundenmeinungen
							</div>
							<h3>wir würden auch ihre Meinung gerne hören</h3>
							<p class="">Es wäre schön, wenn auch Sie uns Ihr Feedback zukommen lassen.</p>
							<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('https://g.page/r/CVpT6XCa9L20EAg/review', '_blank')">Feedback schreiben</button>
						</article>
					</section>

					<section class="box--right-aligned">
						<article class="wrapper">
							<h2 class="h2__heading">Unsere Partner</h2>
							<p class="">Die Zusammenarbeit mit verlässlichen Partnern und Lieferanten, ein um und auf.</p>
							<div class="">
								[ PARTNER LOGOS ]
							</div>
						</article>
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
<?php
/**
* Template Name: Seite FAQs
*/

get_header('tischlerei');
?>

			<main class="site-main">
				<div class="site-content">
					<section class="site-intro box--left-aligned">
						<article class="wrapper">
							<h1 class="site-title h1__title">Häufig gestellte Fragen</h1>
							<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Fragen, die wir schon mehr als einmal beantworten durften.</p>
						</article>
					</section>

					<section id="accordion" class="wrapper">
						<article class="accordion__item">
							<h2 class="accordion__headline""><a href="#">Frage 01</a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
							<div class="accordion_content wrapper">
								<p>Antwort 01</p>
							</div>
						</article>
						<article class="accordion__item accordion__item-hidden">
							<h2 class="accordion__headline""><a href="#">Frage 02</a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
							<div class="accordion_content wrapper">
								<p>Antwort 02</p>
							</div>
						</article>
						<article class="accordion__item accordion__item-hidden">
							<h2 class="accordion__headline""><a href="#">Frage 03</a></h2><p class="accordion__pointer"><i class="arrow down"></i></p>
							<div class="accordion_content wrapper">
								<p>Antwort 03</p>
							</div>
						</article>
					</section>

					<section class="wrapper">
						<div class="">
							<h2 class=""">Haben Sie eine spezielle Frage?</h2>
							<p class="">Kontaktieren Sie uns, wir beantworten diese gerne.</p>
							<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/kontakt.html', '_blank')">Kontakt</button>
							<img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">
						</div>
					</section>

					<section class="wrapper">
						<h2 class="wrapper">Unsere Werte</h2>
						<p class="">Erfahren Sie was unsere Arbeit ausmacht.</p>
						<button class="btn btn--red btn--centered-aligned" type="button" onklick="window.open('/unsere-werte.html', '_blank')">Zu unseren Werten</button>
					</section>

					<section class="recall-section wrapper container--darkgray">
						<div class="recall-section__container">
							<h2 class="recall-section__title h2__title h2__light h2__title--left-aligned">Rückruf vereinbaren</h2>
							<p class="">Hinterlassen Sie uns Ihre Nummer, wir rufen Sie gerne zurück.</p>
							<p class="">[ CONTACT FORM ]</p>
							<button class="btn btn--red recall-section__btn" type="button">Absenden</button>
						</div>
					</section>
				</div>
			</main>

		<?php get_footer(); ?>
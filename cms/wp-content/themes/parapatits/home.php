<?php
/**
* Template Name: Startseite
*/

get_header('');
?>

		<main class="site-main">
			<div class="site-content">
				<section class="intro wrapper">
					<h1 class="site-title h1__title intro__headline h1__title--left-aligned">Parapatits – Ihr starker Partner</h1>
					<p class="intro__subtitle h1__subtitle h1__subtitle--left-aligned">herzlich, verlässlich, echt.</p>

					<ul class="intro__company-listing">
						<li class="intro__list-item intro__list-item--tischlerei">
							<img class="intro__list-img img__wood-square img__wood-square--red lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/oak-wood-red.png" alt="Platzhalter-Bild">
							<div class="intro__list-content">
								<h2 class="intro__list-title h2__title h2__title--left-aligned">Tischlerei</h2>
								<p class="intro__list-subtitle h2__subtitle h2__subtitle--left-aligned"><span class="hover__default-text">Wir gestalten Lebensräume.</span><span class="hover__alt-text">Wir gestalten Lebensträume.</p>
							</div>
						</li>
					</ul>
					<hr class="intro__company-listing-separator"</section>
					<ul class="intro__company-listing">
						<li class="intro__list-item intro__list-item--bestattung">
							<div class="intro__list-content">
								<h2 class="intro__list-title h2__title h2__title--left-aligned">Bestattung</h2>
								<p class="intro__list-subtitle h2__subtitle h2__subtitle--right-aligned"><span class="hover__default-text">Wir begleiten Sie.</span><span class="hover__alt-text">Wir geleiten Sie.</p>
							</div>
							<img class="intro__list-img img__wood-square img__wood-square--gray lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/oak-wood-gray.png" alt="Platzhalter-Bild">
						</li>
					</ul>

				</section>

				<section class="news-section">

					<img class="news-section__img" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/43-Vollbild-querformat.png" alt="Platzhalter-Bild">

					<article class="news-section__container wrapper">
						<h2 class="h2__title news-section__title wrapper">Aktuelles</h2>
						<p class="p__subitle news-section__subtitle wrapper">Aktuelle Informationen</p>
						<div class="news-section__content wrapper">
							<p>
								Wir sind auf Urlaub!
								von 24.12.2021 bis 31.12.2021
								Bitte um Verständnis, dass wir zu dieser Zeit nicht erreichbar sind.
							</p>
						</div>
					</article>

				</section>

				<section class="info-section wrapper">
					<h2 class="h2__title info-section__title h2__title--left-aligned">Tischlerei und Bestattung Parapatits</h2>
					<p class="h2__subtitle h2__subheading info-section__subtitle h2__subtitle--left-aligned">Familienbetrieb mit Herz.</p>
					<div class="info-section__content">
						<p>
							Seit vielen Jahrzehnten steht unser Familienunternehmen auf zwei Standbeinen: <strong>Tischlerei</strong> und <strong>Bestattung</strong>. So unterschiedlich diese beiden Bereiche auch wirken mögen, so haben sie eine Gemeinsamkeit, die uns sehr am Herzen liegt: Es geht darum, den Menschen gut zuzuhören, ihre Bedürfnisse zu erkennen und sie zu verstehen.
						</p>
					</div>
				</section>

				<section class="details-section">
						<ul class="details-section__branches wrapper">
							<li class="details-section__branch-item details-section__branch-item--tischlerei">
								<img class="details-section__branch-item--tischlerei__img lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/parapatits-tischlerei_komp-47-DSC03514.png" alt="Platzhalter-Bild">
								<div class="details-section__branch-item--tischlerei__container">
									<h2 class="details-section__branch-item--tischlerei__title h2__title h2__title--right-aligned">Tischlerei</h2>
									<p class="details-section__branch-item--tischlerei__text h2__subtitle h2__subtitle--right-aligned">Wir gestalten Lebens<span class="letter-colored--red">t</span>räume aus Holz. Von der gut durchdachten Küche bis zum liebevoll gestalteten Kinderzimmer, vom gemütlichen Bad bis zum praktischen Abstellraum.</p>
									<button class="btn btn--red details-section__btn" type="button" onklick="window.open('/tischlerei.html', '_blank')">Mehr erfahren</button>
								</div>
							</li>

							<li class="details-section__branch-item details-section__branch-item--bestattung">
								<img class="details-section__branch-item--bestattung__img lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/parapatits-bestattung_komp-DSC03299t.png" alt="Platzhalter-Bild">
								<div class="details-section__branch-item--bestattung__container">
									<h2 class="details-section__branch-item--bestattung__title h2__title h2__title--left-aligned">Bestattung</h2>
									<p class="details-section__branch-item__text h2__subtitle h2__subtitle--left-aligned">Mit viel Feingefühl und persönlichem Kontakt führen wir Sie durch die schwierige Zeit und schaffen eine ehrende Abschiednahme.</p>
									<button class="btn btn--red details-section__btn" type="button" onklick="window.open('/bestattung.html', '_blank')">Mehr erfahren</button>
								</div>
							</li>
						</ul>
					</article>
				</section>

				<section class="jobs-section">
					<img class="jobs-section__img lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/parapatits-tischlerei_komp-43-DSC03482.JPG" alt="Platzhalter-Bild">
					<div class="jobs-section__container wrapper">
						<h2 class="jobs-section__title h2__title h2__title--left-aligned ">Jobs</h2>
						<p class="jobs-section__text h2__subtitle h2__subtitle--left-aligned">Werde Teil unseres Teams!</p>
						<button class="btn btn--red jobs-section__btn btn--centered-aligned" type="button" onklick="window.open('/jobs.html', '_blank')">Offene Stellen anzeigen</button>
					</div>
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
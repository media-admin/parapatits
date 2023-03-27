<?php
/**
 * Template Name: Seite Über Uns
 */

get_header(); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper no-margin-bottom--small">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">herzlich, verlässlich, echt.</p>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--centered lazyload" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/ueber-uns/cut-for-web_highres-31-DSC03572_web.jpg" alt="Team Parapatits">
				</div>
			</section>

			<section class="info-section box--left-aligned unstacked-left--content">
				<article data-inviewport="entrance-fade-bottom" class="wrapper content-wrapper">
					<h2 class="h2__title info-section__title h2__title--left-aligned">Warum machen wir das, was wir machen?</h2>
					<p class="h2__subtitle info-section__subtitle h2__subtitle--left-aligned">Eine Herzensangelegenheit.</p>
					<div class="info-section__content">
						<p class="">
							Wir sind ein Team, wir sind eine Familie – wir sind die Firma Parapatits. Gegründet im Jahre 1932, sind wir seit über 90 Jahren ein familiengeführtes Unternehmen, bestehend aus einer Tischlereiwerkstätte und einem Bestattungsunternehmen.
						</p>
						<p class="">
							Unsere Mannschaft besteht aus sechs Mitarbeiterinnen und Mitarbeitern in der Werkstatt und im Büro, den beiden Captains Peter und Doris sowie deren Kindern.
						</p>
					</div>
				</article>
			</section>

			<section class="box--right-aligned unstacked-wrapper">

				<div class="unstacked-left">
					<div class="img--left-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="-8" data-rellax-mobile-speed="8" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/ueber-uns/cut-for-web_highres-5-DSC03248_web.jpg" alt="Wir lieben das Arbeiten mit dem Naturwerkstoff Holz.">
					</div>
				</div>

				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<div data-inviewport="entrance-fade-bottom" class="">
							<h2 class="h2__heading">Tischlerei</h2>
							<p class="h2__subheading h2__subtitle--left-aligned">Wir gestalten Lebensräume.</p>
						<div data-inviewport="entrance-fade-bottom" class="">
							<p class="">
								Als Tischlerbetrieb haben wir die Mission, die Umgebung unserer Mitmenschen zu verschönern und ihnen den Alltag zu erleichtern – durch funktionelle Räume mit Wohlfühlcharakter.
								Außerdem lieben wir die Arbeit mit dem Naturwerkstoff Holz. Es ist ein Arbeiten mit fast allen Sinnen. Holz hat so viele optische Facetten, der Duft, die Haptik … da kommen wir aus dem Schwärmen gar nicht mehr heraus. Die vielseitigen Einsatzmöglichkeiten des Werkstoffes lassen uns immer wieder staunen.
							</p>
							<a data-inviewport="entrance-fade-bottom" class="btn btn--red btn--centered-aligned" role="button" href="/tischlerei">Tischlerei anzeigen</a>
						</div>
					</article>
				</div>

			</section>

			<section class="box--left-aligned unstacked-wrapper no-margin-bottom--small">
				<div class="unstacked-right">
					<div class="img--right-aligned">
						<img class="img--margin-bottom lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="-8" data-rellax-mobile-speed="8" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/ueber-uns/cut-for-web_highres-19-DSC03400_web.jpg" alt="Bestattung aus Nächstenliebe">
					</div>
				</div>
				<div class="unstacked-left unstacked-left--content">
					<article data-inviewport="entrance-fade-bottom" class="wrapper content-wrapper">
						<h2 class="h2__heading">Bestattung</h2>
						<p class="h2__subheading h2__subtitle--left-aligned">Wir begleiten Sie.</p>
						<div class="">
							<p class="">
								Unsere Bestattung betreiben wir aus Nächstenliebe. Wir legen großen Wert darauf, dass jeder Mensch eine würdevolle Beisetzung bekommt. Außerdem ist es uns wichtig, Angehörigen Trost und Zuspruch in dieser schwierigen Zeit zu geben.
							</p>
							<a class="btn btn--red btn--centered-aligned" role="button" href="/bestattung">Bestattung anzeigen</a>
						</div>
					</article>
				</div>
			</section>

			<section class="box--centered unstacked-wrapper">
				<div class="unstacked-left">
					<div class="img--left-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="-8" data-rellax-mobile-speed="8" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/ueber-uns/cut-for-web_highres-11-DSC03440_web.jpg" alt="Werde ein Teil unserer familiären Mannschaft!">
					</div>
				</div>
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
							<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Jobs</h2>
						<div data-inviewport="entrance-fade-bottom" class="">
							<p class="">
								Werde Teil unseres Teams!
							</p>
						</div>
						<a data-inviewport="entrance-fade-bottom" class="btn btn--red btn--centered-aligned" role="button" href="/jobs">Offene Stellen anzeigen</a>
					</article>
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer();
?>

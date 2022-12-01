<?php
/**
* Template Name: Seite Über Uns
*/

get_header();
?>

	<main class="site-main">
		<div class="site-content">

			<section class="site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">herzlich, verlässlich, echt.</p>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/ueber-uns/cut-for-web_highres-31-DSC03572_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>

			<section class="info-section box--left-aligned">
				<article class="wrapper">
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
				<div class="unstacked-right">
					<article class="wrapper">
						<div class="">
							<h2 class="h2__heading">Tischlerei</h2>
							<p class="h2__subtitle h2__subtitle--left-aligned">Wir gestalten Lebensräume.</p>
						<div class="">
							<p class="">
								Als Tischlerbetrieb haben wir die Mission, die Umgebung unserer Mitmenschen zu verschönern und ihnen den Alltag zu erleichtern – durch funktionelle Räume mit Wohlfühlcharakter.
								Außerdem lieben wir die Arbeit mit dem Naturwerkstoff Holz. Es ist ein Arbeiten mit fast allen Sinnen. Holz hat so viele optische Facetten, der Duft, die Haptik … da kommen wir aus dem Schwärmen gar nicht mehr heraus. Die vielseitigen Einsatzmöglichkeiten des Werkstoffes lassen uns immer wieder staunen.
							</p>
							<a class="btn btn--red btn--centered-aligned" role="button" href="/tischlerei">Tischlerei anzeigen</a>
						</div>
					</article>
				</div>
				<div class="unstacked-left">
					<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/ueber-uns/cut-for-web_highres-5-DSC03248_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>

			<section class="box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article class="wrapper">
						<h2 class="h2__heading">Bestattung</h2>
						<p class="h2__subtitle h2__subtitle--left-aligned">Wir begleiten Sie.</p>
						<div class="">
							<p class="">
								Unsere Bestattung betreiben wir aus Nächstenliebe. Wir legen großen Wert darauf, dass jeder Mensch eine würdevolle Beisetzung bekommt. Außerdem ist es uns wichtig, Angehörigen Trost und Zuspruch in dieser schwierigen Zeit zu geben.
							</p>
						</div>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/ueber-uns/cut-for-web_highres-19-DSC03400_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>

			<section class="box--right-aligned unstacked-wrapper">
				<div class="unstacked-right">
					<article class="wrapper">
							<h2 class="h2__heading">Jobs</h2>
						<div class="">
							<p class="">
								Werde Teil unseres Teams!
							</p>
						</div>
						<a class="btn btn--red btn--centered-aligned" role="button" href="/jobs" target="_blank">Offene Stellen anzeigen</a>
					</article>
				</div>
				<div class="unstacked-left">
					<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/ueber-uns/cut-for-web_highres-11-DSC03440_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>


			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
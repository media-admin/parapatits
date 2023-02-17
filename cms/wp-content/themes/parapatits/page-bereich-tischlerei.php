<?php
/**
 * Template Name: Seite Bereich Tischlerei
 */

get_header("tischlerei"); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir gestalten Lebensräume.</p>
						<div class="">
							<p class="">
								Von der Idee bis zur Montage, alles aus einer Hand.
							</p>
						</div>
					</article>
				</div>







				<div class="unstacked-right">
						<div class="img--wood-square-red">
							<img class="img--wood-square-before img--wood-square-before-red" src="<?php bloginfo(
         "template_directory"
       ); ?>/assets/images/oak-wood-red.png" alt="Gray Wood Square">
							<img data-inviewport="entrance-fade-center" id="jumping-img" class="img--centered img--wood-square lazyload" src="<?php bloginfo(
         "template_directory"
       ); ?>/assets/images/tischlerei/tischlerei/cut-for-web_highres-5-26490815358_55c0a42b07_o_web.jpg" alt="Wohlfühlräume mit Herz">
						</div>
					</div>


			</section>

			<section class="box--right-aligned unstacked-wrapper">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Alles beginnt mit einer Idee ...</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							Einen Raum zu gestalten und dabei die eigene Persönlichkeit einfließen zu lassen, ist ein wunderschönes Projekt. Sie haben schon konkrete Ideen? Wir freuen uns, alles darüber zu erfahren – wie ausgefallen Ihre Wünsche auch sein mögen. Sie haben noch keine konkrete Vorstellung? Erzählen Sie uns von sich und Ihren Anforderungen und wir plaudern über die verschiedenen Möglichkeiten. Gemeinsam machen wir den ersten Schritt, um Ihre individuellen Lebens(t)räume Wirklichkeit werden zu lassen.
						</p>
					</article>
				</div>
				<div class="unstacked-left">
					<img class="img--right-aligned lazyload rellax" data-rellax-speed="-2" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/tischlerei/tischlerei/cut-for-web_highres-8-DOC002_web.jpg" alt="Idee">
				</div>
			</section>

			<section class="box--left-aligned unstacked-wrapper">
				<div class="unstacked-left unstacked-left--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">gefolgt von viel Planung …</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							Danach gehts auch schon an die Planung und Ideen, die zuvor nur in den Köpfen existiert haben, werden zu Papier gebracht und diskutiert. Oft entstehen in diesem Schritt der Visualisierung neue Ideen, andere werden wieder verworfen. Jedes Detail wird präzise ausgefeilt, denn das Endergebnis soll nicht nur schön sein, sondern auch praktisch und funktionell.
						</p>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--left-aligned lazyload rellax" data-rellax-speed="-2" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/tischlerei/tischlerei/cut-for-web_highres-7-Pallisch-Kueche-1_gerade_web.jpg" alt="Visualisierung und Planung">
				</div>
			</section>

			<section class="box--right-aligned unstacked-wrapper">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">und einer perfekten Umsetzung.</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							Als letzter Schritt folgt die Umsetzung. Hier sind Handwerkskunst und Präzision gefragt, gepaart mit jeder Menge Erfahrung. Um das perfekte Ergebnis zu gewährleisten, werden in unserer Tischlerei Projekte vom Anfang bis zum Ende – von der Idee über Planung und Umsetzung bis zur Montage – von denselben Handwerkern begleitet. Gerne können Sie Ihrer neuen Einrichtung schon beim Entstehen zusehen. Kommen Sie einfach auf einen Sprung in der Werkstatt vorbei!
						</p>
					</article>
				</div>
				<div class="unstacked-left">
					<img class="img--left-aligned lazyload rellax" data-rellax-speed="-2" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/tischlerei/tischlerei/cut-for-web_highres-26-DSC03479_web.jpg" alt="Durchführung und Montage">
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_our_values]"); ?>

			<?php echo do_shortcode("[shortcode_projects_slider]"); ?>

			<section class="box--centered">
					<div class="unstacked-left">
						<img class="img--fullwidth lazyload rellax" data-rellax-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/tischlerei/tischlerei/cut-for-web_highres-20-DSC03422_web.jpg" alt="Erfahrung und Präzision">
					</div>
			</section>

			<?php echo do_shortcode("[shortcode_testimonials_tischlerei]"); ?>

			<?php echo do_shortcode("[shortcode_your_opinion]"); ?>

			<?php echo do_shortcode("[shortcode_partner_tischlerei]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer();
?>

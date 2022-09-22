<?php
/**
* Template Name: Seite Jobs
*/

get_header();
?>

	<main class="site-main">
		<section class="site-intro box--left-aligned">
			<article class="wrapper">
				<h1 class="site-title h1__title"><?php the_title();?></h1>
				<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Werde Teil unseres Teams!</p>
			</article>
		</section>

		<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/jobs/parapatits-tischlerei_komp-32-DSC03424_web.jpg" alt="Platzhalter-Bild">

		<section class="box--left-aligned">
			<article class="wrapper">
				<h2 class="h2__heading">Offene Stellen</h2>
				<div class="">
					<h2 class="h2__heading">PLATZHALTER-TEXT</h2>
					<p class="">
						Zur Zeit sind leider keine offenen Stellen vorhanden. Wir freuen uns aber trotzdem auf Ihre Initiativbewerbung.
					</p>
					<a class="btn btn--red" role="button" href="mailto:bewerbung@parapatits.at?subject='Bewerbung über die Website'">Bewerbung mailen</a>
				</div>
			</article>

		<section class="box--left-aligned">
			<article class="wrapper">
				<div class="">
					<h2 class="h2__heading">Tischlereigeselle/in</h2>
					<p class="">
						Auf dich wartet:
						- ein kollegiales und familiäres Umfeld
						- ein Junges und motiviertes Team
						- ein sicherer langfristiger Arbeitsplatz
						- selbstständige Projektabwicklung von Anfang bis Ende
					</p>
					<a class="btn btn--red" role="button" href="/jobs">Jobdetails anzeigen</a>
				</div>
			</article>

			<article class="wrapper">
				<div class="">
					<h2 class="h2__heading">Planer/Zeichner</h2>
					<p class="">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
					</p>
					<a class="btn btn--red" role="button" href="/jobs">Jobdetails anzeigen</a>
				</div>
			</article>
		</section>

		<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/jobs/parapatits-tischlerei_komp-48-DSC03529_web.jpg" alt="Platzhalter-Bild">

		<section class="box--left-aligned">
			<article class="wrapper">
				<div class="">
					<h2 class="h2__heading">Betrieb ansehen</h2>
					<p class="">
						Melde dich bei uns und wir zeigen dir erstmal unseren Betrieb.
					</p>
				</div>
				<a class="btn btn--red" role="button" href="/kontakt">Kontakt</a>
			</article>
		</section>

		<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
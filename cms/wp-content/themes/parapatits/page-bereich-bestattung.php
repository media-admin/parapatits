<?php
/**
* Template Name: Seite Bereich Bestattung
*/

get_header( 'bestattung' );
?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir begleiten Sie.</p>
						<div class="wrapper">
							<p class="">
								Der Erhalt der Menschenwürde bis zum Schluss.
							</p>
						</div>
					</article>
				</div>
				<div class="unstacked-rigth">
					<div class="img--wood-square-before-gray">
						<img class="img--centered img--wood-square-before lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-18-DSC03400_web.jpg" alt="Platzhalter-Bild">
					</div>
				</div>
			</section>

			<section class="box--right-aligned unstacked-wrapper">
				<div class="unstacked-right">
					<article class="wrapper">
						<h2 class="h2__heading">Unser Arbeitsfeld</h2>
						<p class="">
							Als Bestatter ist es unsere Aufgabe, Verstorbene in der richtigen Form zur letzten Ruhe zu geleiten und die Hinterbliebenen mit Erfahrung und Feingefühl zu begleiten.
						</p>
					</article>
				</div>
				<div class="unstacked-left">
					<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-8-DSC03310_web.jpg" alt="Platzhalter-Bild">
				</div>

				<img class="img--right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-10-DSC03314_web.jpg" alt="Platzhalter-Bild">
			</section>

			<section class="box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article class="wrapper">
						<h2 class="h2__heading">Wir unterstützen Sie ganzheitlich</h2>
						<p class="">
							In intensivem, persönlichem Kontakt leiten wir Sie durch diese schwere Zeit und versuchen, Ihnen das Abschiednehmen zu erleichtern. Wir übernehmen die behördlichen Wege und organisieren in enger Abstimmung mit Ihnen alles rund um die Bestattung und Trauerfeier. Sie können sich voll und ganz auf Ihre Trauer und das Abschiednehmen einlassen.
							Oft fehlt den Erwachsenen die Zeit und Kraft, um Minderjährigen zu erklären, was vor sich geht. Wir haben dazu spezielle Weiterbildungen absolviert und kümmern uns einfühlsam um Kinder und Jugendliche.
						</p>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-16-DSC03376_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>

			<section class="box--right-aligned">
				<article class="wrapper">
					<h2 class="h2__heading">Was ist Ihre Aufgabe?</h2>
					<p class="">
						Nachdem Sie vom Sterbefall erfahren, sollten Sie uns umgehend kontaktieren. Näheres besprechen wir mit Ihnen in aller Ruhe und Schritt für Schritt.
					</p>
				</article>
			</section>

			<?php echo do_shortcode("[shortcode_just_call]"); ?>

			<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-2-DSC03191_web.jpg" alt="Platzhalter-Bild">

			<section class="box--right-aligned">
				<article class="wrapper">
					<h2 class="h2__heading">Leitfaden im Todesfall</h2>
					<p class="">Was tun, wenn ein Familienmitglied stirbt?</p>
					<a class="btn btn--red btn--centered-aligned" role="button" href="/leitfaden-im-todesfall">Leitfaden anzeigen</a>
				</article>
				<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-14-DSC03332_web.jpg" alt="Platzhalter-Bild">
			</section>

			<?php echo do_shortcode("[shortcode_testimonials_bestattung]"); ?>

			<?php echo do_shortcode("[shortcode_partner_bestattung]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
<?php
/**
* Template Name: Seitentemplate Bestattung
*/

get_header('bestattung');
?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir begleiten Sie.</p>
					<div class="wrapper">
						<p class="">
							Der Erhalt der Menschenwürde bis zum Schluss.
						</p>
					</div>
				</article>
				<div class="img--wood-square-before-gray">
					<img class="img--centered img--wood-square-before lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/parapatits-bestattung_highres-28-DSC03400_web.jpg" alt="Platzhalter-Bild">
				</div>
			</section>

			<section class="box--right-aligned">
				<article class="wrapper">
					<h2 class="h2__heading">Unser Arbeitsfeld</h2>
					<p class="">
						Als Bestatter ist es unsere Aufgabe, Verstorbene in der richtigen Form zur letzten Ruhe zu geleiten und die Hinterbliebenen mit Erfahrung und Feingefühl zu begleiten.
					</p>
				</article>
				<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/parapatits-bestattung_highres-4-DSC03310_web.jpg" alt="Platzhalter-Bild">
				<img class="img--right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/parapatits-bestattung_highres-6-DSC03314_web.jpg" alt="Platzhalter-Bild">
			</section>

			<section class="box--left-aligned">
				<article class="wrapper">
					<h2 class="h2__heading">Wir unterstützen Sie ganzheitlich</h2>
					<p class="">
						In intensivem, persönlichem Kontakt leiten wir Sie durch diese schwere Zeit und versuchen, Ihnen das Abschiednehmen zu erleichtern. Wir übernehmen die behördlichen Wege und organisieren in enger Abstimmung mit Ihnen alles rund um die Bestattung und Trauerfeier. Sie können sich voll und ganz auf Ihre Trauer und das Abschiednehmen einlassen.
						Oft fehlt den Erwachsenen die Zeit und Kraft, um Minderjährigen zu erklären, was vor sich geht. Wir haben dazu spezielle Weiterbildungen absolviert und kümmern uns einfühlsam um Kinder und Jugendliche.
					</p>
				</article>
				<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/parapatits-bestattung_highres-19-DSC03376_web.jpg" alt="Platzhalter-Bild">
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

			<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/parapatits-tischlerei_komp-8-DSC03191_web.jpg" alt="Platzhalter-Bild">

			<section class="box--right-aligned">
				<article class="wrapper">
					<h2 class="h2__heading">Leitfaden im Todesfall</h2>
					<p class="">Was tun, wenn ein Familienmitglied stirbt?</p>
					<a class="btn btn--red btn--centered-aligned" role="button" href="/leitfaden-im-todesfall">Leitfaden anzeigen</a>
				</article>
				<img class="img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/bestattung/parapatits-bestattung_highres-10-DSC03332_web.jpg" alt="Platzhalter-Bild">
			</section>

			<section class="box--left-aligned">
				<article class="wrapper">
					<h2 class="h2__heading"">Was unsere Kunden sagen</h2>
					<div>
						Slider Kundenmeinungen
					</div>
					<h3>wir würden auch ihre Meinung gerne hören</h3>
					<p class="">Es wäre schön, wenn auch Sie uns Ihr Feedback zukommen lassen.</p>
					<a class="btn btn--red btn--centered-aligned" role="button" href="https://g.page/r/CVpT6XCa9L20EAg/review" target="_blank">Feedback schreiben</a>
				</article>
			</section>

			<section class="partner box--left-aligned">
				<article class="wrapper">
					<h2 class="h2__heading">Unsere Partner</h2>

					<div class="partner__container">
						<ul class="partner__listing">
							<li class="partner__listing-item"><a class="partner__link" href="#" target="_blank"><img class="partner__logo lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logos/partner/logo_liv-s-memories.svg" alt=""></a></li>
							<li class="partner__listing-item"><a class="partner__link" href="#" target="_blank"><img class="partner__logo lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logos/partner/logo_algordanza.svg" alt=""></a></li>
							<li class="partner__listing-item"><a class="partner__link" href="#" target="_blank"><img class="partner__logo lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logos/partner/logo_parkfriedhof-lutzmannsburg.svg" alt=""></a></li>
							<li class="partner__listing-item"><a class="partner__link" href="#" target="_blank"><img class="partner__logo lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logos/partner/logo_wiener-verein.svg" alt=" "></a></li>
						</ul>

					</div>
				</article>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
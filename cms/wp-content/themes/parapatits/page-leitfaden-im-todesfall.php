<?php
/**
* Template Name: Seite Leitfaden im Todesfall
*/

get_header( 'bestattung' );
?>

		<main class="site-main">
			<div class="site-content">
				<section class="site-intro box--left-aligned">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Was tun, wenn ein Familienmitglied stirbt?</p>
					</article>
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/leitfaden-im-todesfall/parapatits-bestattung_highres-8-DSC03325_web.jpg" alt="Platzhalter-Bild">
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Leitfaden</h2>
						<div class="">
							<p class="">
								Die erste und wichtigste Aktion ist die <strong>Kontaktaufnahme</strong> mit uns. Danach werden wir Sie um ein persönliches Treffen bei uns bitten. Bitte bringen Sie dabei die <strong>benötigen Dokumente</strong> mit. Alle weiteren Schritte besprechen wir gemeinsam in aller Ruhe, mit Umsicht und Feingefühl.
							</p>
							<a class="btn btn--red btn--centered-aligned" role="button" href="/weiterfuehrende-infos/#wichtige-dokumente">Dokumente anzeigen</a>
						</div>
					</article>
				</section>

				<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bestattung/leitfaden-im-todesfall/parapatits-bestattung_highres-26-DSC03396_web.jpg" alt="Platzhalter-Bild">

				<section class="box--right-aligned">
					<article class="wrapper">
						<h2 class="h2__heading">Unsere Leistungen</h2>
						<div class="">
							<p class="">
								Erfahren Sie, wie wir Sie unterstützen können.
							</p>
							<a class="btn btn--red btn--centered-aligned" role="button" href="/unsere-leistungen">Leistungen anzeigen</a>
						</div>
					</article>
				</section>

				<?php echo do_shortcode("[shortcode_recall]"); ?>

			</div>
		</main>

<?php get_footer(); ?>
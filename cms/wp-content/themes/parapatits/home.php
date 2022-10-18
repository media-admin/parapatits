<?php
/**
* Template Name: Startseite
*/

get_header();
?>

	<main class="site-main">
		<div class="site-content">
			<section class="intro wrapper unstacked-wrapper">
				<div class="unstacked-left">
					<h1 class="site-title h1__title intro__headline h1__title--left-aligned">Parapatits – Ihr starker Partner</h1>
					<p class="intro__subtitle h1__subtitle h1__subtitle--left-aligned">herzlich, verlässlich, echt.</p>
				</div>
				<div class="unstacked-right">
					<ul class="intro__company-listing">
						<li class="intro__list-item intro__list-item--tischlerei">
							<img class="intro__list-img img--wood-square img--wood-square-red lazyload" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/oak-wood-red.png" alt="Platzhalter-Bild">
							<div class="intro__list-content">
								<h2 class="intro__list-title h2__title h2__title--left-aligned">Tischlerei</h2>
								<p class="intro__list-subtitle h2__subtitle h2__subtitle--left-aligned"><span class="hover__default-text">Wir gestalten Lebensräume.</span><span class="hover__alt-text">Wir gestalten Lebensträume.</span></p>
							</div>
						</li>
					</ul>
					<hr class="intro__company-listing-separator"></hr>
					<ul class="intro__company-listing">
						<li class="intro__list-item intro__list-item--bestattung">
							<div class="intro__list-content">
								<h2 class="intro__list-title h2__title h2__title--left-aligned">Bestattung</h2>
								<p class="intro__list-subtitle h2__subtitle h2__subtitle--right-aligned"><span class="hover__default-text">Wir begleiten Sie.</span><span class="hover__alt-text">Wir geleiten Sie.</p>
							</div>
							<img class="intro__list-img img--wood-square img--wood-square-gray lazyload" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/oak-wood-gray.png" alt="Platzhalter-Bild">
						</li>
					</ul>
				</div>
			</section>

			<section id="news-section" class="news-section unstacked-wrapper" data-matching-link="#news-section-link">

				<div class="unstacked-left">
					<img class="news-section__img img--fullwidth" src="<?php bloginfo( 'template_directory' ); 	?>/assets/images/home/cut-for-web_highres-30-DSC03554_web.jpg" alt="Platzhalter-Bild">
				</div>

				<div class="unstacked-right">
					<article class="news-section__container wrapper">
						<h2 class="h2__title news-section__title wrapper">Aktuelles</h2>

						<?php

						$args = array(
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'post_type' => 'notification',
						);

						$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<p class="p__subitle news-section__subtitle wrapper"><?php the_title();?></p>
							<div class="news-section__content wrapper">
								<p>
									<?php the_content();?>
								</p>
							</div>

						<?php endwhile; ?>

						<?php
						wp_reset_postdata();
						?>

					</article>
				</div>
			</section>

			<section class="info-section box--left-aligned">
				<article class="wrapper">
					<h2 class="h2__title info-section__title h2__title--left-aligned">Tischlerei und Bestattung Parapatits</h2>
					<p class="h2__subtitle info-section__subtitle h2__subtitle--left-aligned">Eine Herzensangelegenheit.</p>
					<div class="info-section__content">
						<p>
							Seit vielen Jahrzehnten steht unser Familienunternehmen auf zwei Standbeinen: <a href="/tischlerei">Tischlerei</a> und <a href="/bestattung">Bestattung</a>. So unterschiedlich diese beiden Bereiche auch wirken mögen, so haben sie eine Gemeinsamkeit, die uns sehr am Herzen liegt: Es geht darum, den Menschen gut zuzuhören, ihre Bedürfnisse zu erkennen und sie zu verstehen.
						</p>
					</div>
				</article>
			</section>

			<section class="details-section box--right-aligned unstacked-wrapper">
				<div class="unstacked-right">
					<img class="details-section__branch-item--tischlerei__img img--left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/cut-for-web_highres-28-DSC03514_web.jpg" alt="Platzhalter-Bild">
				</div>

				<div class="unstacked-left">
					<article class="wrapper">
						<h2 class="details-section__branch-item--tischlerei__title h2__title h2__title--right-aligned">Tischlerei</h2>
						<div class="">
							<p class="details-section__branch-item--tischlerei__text h2__subtitle h2__subtitle--right-aligned">Wir gestalten Lebens<span class="letter-colored--red">t</span>räume aus Holz. Von der gut durchdachten Küche bis zum liebevoll gestalteten Kinderzimmer, vom gemütlichen Bad bis zum praktischen Abstellraum.</p>
							<a class="btn btn--red details-section__btn" role="button" href="/tischlerei">Mehr erfahren</a>
						</div>
					</article>
				</div>
			</section>

			<section class="box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<img class="details-section__branch-item--bestattung__img img--right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/cut-for-web_highres-6-DSC03299_web.jpg" alt="Platzhalter-Bild">
				</div>
				<div class="unstacked-right">
					<article class="wrapper">
						<h2 class="details-section__branch-item--bestattung__title h2__title h2__title--left-aligned">Bestattung</h2>
						<div class="">
							<p class="details-section__branch-item__text h2__subtitle h2__subtitle--left-aligned">Mit viel Feingefühl und persönlichem Kontakt führen wir Sie durch die schwierige Zeit und schaffen eine ehrende Abschiednahme.</p>
							<a class="btn btn--red details-section__btn" role="button" href="/bestattung">Mehr erfahren</a>
						</div>
					</article>
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_jobs]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
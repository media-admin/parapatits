<?php
/**
* Template Name: Seite Fehler 404
*/
get_header();
?>

<main class="site-main">
	<div class="site-content">
		<section class="site-intro box--left-aligned unstacked-wrapper">
			<div class="unstacked-left">
				<article class="wrapper">
					<h1 class="site-title h1__title">Fehler</h1>
					<div class="page404__content wrapper">
						<p class="page404__message">Die angeforderte Seite konnte nicht gefunden werden.</p>
						<p class="page404__additional-info">Hier sind Sie leider auf dem Holzweg.</p>
						<a class="btn btn--red btn--centered-aligned" role="button" href="<?php echo get_home_url(); ?>">Zur Startseite</a>
					</div>
				</article>
			</div>
			<div class="unstacked-right">
				<div class="img--centered lazyload">
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/404/cut-for-web_highres-2-DSC03464_web.jpg" alt="dunkle Holzoberfläche">
				</div>
			</div>
		</section>
	</div>
</main>

<?php get_footer(); ?>
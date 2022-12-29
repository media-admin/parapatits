<?php
/**
* Template Name: Seite Fehler 404
*/
get_header();
?>

<main class="site-main">
	<div class="site-content">
		<section class="info-section box--left-aligned">
			<article class="wrapper content-wrapper">
				<h1 class="page404__title site-title h1__title">Fehler</h1>
				<div class="page404__content wrapper">
					<p class="page404__message">Die angeforderte Seite konnte nicht gefunden werden.</p>
					<p class="page404__additional-info">Hier sind Sie leider auf dem Holzweg.</p>
					<a class="btn btn--red btn--centered-aligned" role="button" href="<?php echo get_home_url(); ?>">Zur Startseite</a>
				</div>
			</article>
		</section>
	</div>
</main>

<?php get_footer(); ?>
<?php
/**
* Template Name: Seite 404
*/
get_header();
?>
	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title">Fehler</h1>
					<div class="">
						<p class="">Die angeforderte Seite konnte nicht gefunden werden.</p>
						<a class="btn btn--red btn--centered-aligned" role="button" href="/home">Zur Startseite</a>
					</div>
				</article>
			</section>
			<?php echo do_shortcode("[shortcode_recall]"); ?>
		</div>
	</main>
<?php get_footer(); ?>
<?php
/**
* Template Name: Seite Datenschutz
*/

get_header();
?>

<main class="site-main">
	<div class="site-content">
		<section class="site-intro box--left-aligned unstacked-wrapper">
			<div class="unstacked-left">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
				</article>
			</div>
			<div class="unstacked-right">
				<div class="img--centered lazyload">
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/datenschutz/cut-for-web_highres-4-DSC03558_web.jpg" alt="Betriebsstandort der Firma Parapatits Markt St. Martin">
				</div>
			</div>
		</section>
		<section class="info-section box--left-aligned">
			<article class="wrapper content-wrapper">
				<div class="wrapper">
					<?php the_content(); ?>
				</div>
			</article>
		</section>
	</div>
</main>

<?php get_footer(); ?>
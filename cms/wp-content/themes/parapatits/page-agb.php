<?php
/**
* Template Name: Seite AGBs
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
					<img class="img--centered lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/agb/cut-for-web_highres-1-DSC03269_web.jpg" alt="Teambesprechung in der Tischlerei Parapatits">
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
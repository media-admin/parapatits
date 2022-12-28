<?php
/**
* Template Name: Seite Datenschutz
*/

get_header();
?>

<main class="site-main">
	<div class="site-content">
		<section class="info-section box--left-aligned">
			<article class="wrapper content-wrapper">
				<h1 class="site-title h1__title"><?php the_title();?></h1>
				<div class="wrapper">
					<?php the_content(); ?>
				</div>
			</article>
		</section>

	</div>
</main>

<?php get_footer(); ?>
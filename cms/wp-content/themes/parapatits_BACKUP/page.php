<?php
/**
* Template Name: Seite Standard
*/

get_header();
?>

<main class="site-main">
	<div class="site-content">
		<?php
			the_content();
		?>
	</div>
</main>

<?php get_footer(); ?>
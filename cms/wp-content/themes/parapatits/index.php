<?php

get_header(); ?>

	<main class="site-main">
		<div class="site-content">
			<h1 class="site-title h1__title">
				<?php the_title();?>
			</h1>
			<?php
				the_content();
			?>
		</div>
	</main>

<?php get_footer(); ?>
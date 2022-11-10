<section class="testimonials box--centered">
	<article class="testimonials__container wrapper">
		<div class="">
			<h2 class="testimonials__title h2__title h2__title--left-aligned"">Was unsere Kunden sagen</h2>
			<div class="testimonials-carousel single-item">

				<?php

				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'testimonial',
					'testimonial-category' => 'tischlerei'
				);

				$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="testimonials-carousel__container">
						<p class="testimonials-carousel__content"><?php the_content(); ?></p>
						<p class="testimonials-carousel__title"><?php the_title(); ?></p>
					</div>

					<?php endwhile; ?>

					<?php
					wp_reset_postdata();
					?>

			</div>

		</div>
	</article>
</section>

<section class="partner box--centered">
	<article class="wrapper">
		<h2 class="h2__heading">Unsere Partner</h2>
		<p class="partner__intro">
			Die Zusammenarbeit mit verlässlichen Partnern und Lieferanten, ein um und auf.
		</p>
		<div class="partner__container">
			<ul class="partner__listing">

				<?php

				$args = array(
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post_type' => 'partner',
					'partner-category' => 'tischlerei'
				);

				$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();

						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

						<li class="partner__listing-item"><a class="partner__link" href="<?php the_field('partner-url');?>" target="_blank"><img class="partner__logo lazyload" src="<?php echo $featured_img_url; ?>" alt=""></a></li>

					<?php endwhile; ?>

				<?php
				wp_reset_postdata();
				?>

			</ul>
		</div>
	</article>
</section>
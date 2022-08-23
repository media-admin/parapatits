<!-- <section class="testimonials box--left-aligned">
	<article class="testimonials__container wrapper">
		<div class="">
			<h2 class="testimonials__title h2__title h2__title--left-aligned"">Was unsere Kunden sagen</h2>
			<div class="testimonials-carousel single-item">
				<div class="testimonials-carousel__container">
					<p class="testimonials-carousel__content">Absolut kompetente Beratung und Betreuung!</p>
					<p class="testimonials-carousel__title">Thomas Rathmanner</p>
				</div>
				<div class="testimonials-carousel__container">
					<p class="testimonials-carousel__content">Beste Tischlerei ever. Gehen auf die Wünsche der Kunden ein, sehr freundliche und kompetente Beratung.</p>
					<p class="testimonials-carousel__title">Petra Pieber</p>
				</div>
				<div class="testimonials-carousel__container">
					<p class="testimonials-carousel__content">Netter Service und perfekte Umsetzung! Offen für persönliche Wünsche! Einfach top!</p>
					<p class="testimonials-carousel__title">Julia Mock</p>
				</div>
			</div>
			<h3 class="h3__heading">Wir würden auch Ihre Meinung gerne hören</h3>
			<p class="">Lassen Sie uns Ihr Feedback zukommen!</p>
			<a class="btn btn--red btn--centered-aligned" role="button" href="https://g.page/r/CVpT6XCa9L20EAg/review" target="_blank">Feedback schreiben</a>
		</div>
	</article>
</section> -->


<section class="testimonials box--left-aligned">
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
			<h3 class="h3__heading">Wir würden auch Ihre Meinung gerne hören</h3>
			<p class="">Lassen Sie uns Ihr Feedback zukommen!</p>
			<a class="btn btn--red btn--centered-aligned" role="button" href="https://g.page/r/CVpT6XCa9L20EAg/review" target="_blank">Feedback schreiben</a>
		</div>
	</article>
</section>

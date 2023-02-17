<section class="project-carousel box--centered">
	<article class="">
		<h2 data-inviewport="entrance-fade-bottom" class="h2__heading entrance-fade-bottom">Projekte</h2>
		<div data-inviewport="entrance-fade-bottom" class="project-carousel__projects-container">
			<?php
   $args = [
     "post_status" => "publish",
     "posts_per_page" => 5,
     "post_type" => "project",
   ];

   $loop = new WP_Query($args);

   while ($loop->have_posts()):

     $loop->the_post();

     $image_id = get_post_thumbnail_id(get_the_ID());
     $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), "full");
     $alt_text = get_post_meta($image_id, "_wp_attachment_image_alt", true);
     ?>

					<div>
						<a href="<?php the_permalink(); ?>">
							<div class="img-wrapper--project-thumb">
								<img data-inviewport="entrance-scale-backward-center-reverse" class="project-carousel__thumbnail" src="<?php echo $featured_img_url; ?>" alt="<?php echo $alt_text; ?>">
							</div>
						</a>
						<div class="project-carousel__content">
							<h2 class="project-carousel__title h2__heading"><?php the_title(); ?></h2>
							<p class="project-carousel__meta h2__subheading"><?php the_field(
         "project-city"
       ); ?> - <?php the_field("project-date"); ?></p>
						</div>
					</div>

				<?php
   endwhile;
   wp_reset_postdata();
   ?>
			</div>

			<div class="project-carousel__button-container">
				<a class="project-carousel__button btn--red btn btn--centered-aligned" role="button" href="/projekte">Alle Projekte anzeigen</a>
			</div>
		</article>
</section>
<section class="projects-overview">

	<div class="projects-overview__search-area">

		<div data-inviewport="entrance-fade-bottom" id="projects-overview__project">

			<!-- filter  ----------------------->
			<ul class="projects-overview__project-filters">
				<li class="projects-overview__list projects-overview__project-filter--active" data-filter="alle">Alle</li>
				<?php
    $tags = get_tags();
    if ($tags):
      foreach ($tags as $tag): ?>
							<?php echo '<li class="projects-overview__list" data-filter="' .
         $tag->name .
         '">' .
         $tag->name .
         "</li>";endforeach;
    endif;
    ?>
			</ul>

			<!-- container  ----------------------->
			<div data-inviewport="entrance-fade-bottom" class="projects-overview__project-container">

				<?php
    $args = [
      "post_status" => "publish",
      "posts_per_page" => 999,
      "post_type" => "project",
    ];

    $loop = new WP_Query($args);

    while ($loop->have_posts()):

      $loop->the_post();

      $image_id = get_post_thumbnail_id(get_the_ID());
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), "full");
      $alt_text = get_post_meta($image_id, "_wp_attachment_image_alt", true);

      $posttags = get_the_tags();
      ?>


					<!-- box ----------------------->
					<a data-inviewport="entrance-scale-backward-center-reverse" class="projects-overview__project-box
						<?php if ($posttags) {
        foreach ($posttags as $tag) {
          echo $tag->name . " ";
        }
      } ?>
					" href="<?php the_permalink(); ?>">
                    <div class="img-wrapper--project-thumb">
						<img src="<?php echo $featured_img_url; ?>" alt="<?php echo $alt_text; ?>">
                    </div>

						<div class="">
							<h2 class="project-overview-box__title h2__heading"><?php the_title(); ?></h2>
							<p class="project-overview-box__meta h2__subheading"><?php the_field(
         "project-city"
       ); ?> - <?php the_field("project-date"); ?></p>
						</div>

					</a>

				<?php
    endwhile;
    wp_reset_postdata();
    ?>

			</div>

			<div data-inviewport="entrance-fade-bottom" id="loadMore" class="projects-overview__button btn btn--red btn--centered-aligned">Weitere Projekte laden</div>

		</div>

	</div>

</section>
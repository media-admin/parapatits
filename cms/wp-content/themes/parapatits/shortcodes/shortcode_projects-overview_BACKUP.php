<section class="projects-overview">

	<div class="projects-overview__search-area">

		<section id="projects-overview__project">

			<?php
			$args = array(
				'post_status' => 'publish',
				'posts_per_page' => 999,
				'post_type' => 'project'
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();

				$image_id = get_post_thumbnail_id(get_the_ID());
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true); ?>

				<!-- filter  ----------------------->
				<ul class="projects-overview__project-filters">
					<li class="projects-overview__list projects-overview__project-filter--active" data-filter="alle">Alle</li>
					<li class="projects-overview__list" data-filter="kueche">Küchen</li>
					<li class="projects-overview__list" data-filter="terrasse">Terrassen</li>
					<li class="projects-overview__list" data-filter="wintergarten">Wintergärten</li>
					<li class="projects-overview__list" data-filter="carport">Carports</li>
				</ul>

				<!-- container  ----------------------->
				<div class="projects-overview__project-container">

					<!-- box ----------------------->
					<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php the_permalink() ?>">
						<img src="<?php echo $featured_img_url; ?>" alt="<?php echo $alt_text ;?>">
					</a>

				</div>

			<?php endwhile;
				wp_reset_postdata();
			?>





			<div id="loadMore" class="projects-overview__button btn btn--red btn--centered-aligned">Weitere Projekte laden</div>
		</section>











		<!-- filter  ----------------------->
		<ul class="projects-overview__project-filters">
			<li class="projects-overview__list projects-overview__project-filter--active" data-filter="alle">Alle</li>
			<li class="projects-overview__list" data-filter="kueche">Küchen</li>
			<li class="projects-overview__list" data-filter="terrasse">Terrassen</li>
			<li class="projects-overview__list" data-filter="wintergarten">Wintergärten</li>
			<li class="projects-overview__list" data-filter="carport">Carports</li>
		</ul>

		<!-- container  ----------------------->
		<div class="projects-overview__project-container">

			<!-- box-1 (about-app) ----------------------->
			<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg" alt="work">
			</a>

			<!-- box-2 (about-website) ----------------------->
			<a class="projects-overview__project-box terrasse" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg" alt="work">
			</a>

			<!-- box-3 (about-ai) ----------------------->
			<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg" alt="work">
			</a>

			<!-- box-4 (about-design) ----------------------->
			<a class="projects-overview__project-box wintergarten terrasse" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="work">
			</a>

			<!-- box-5 (about-design) ----------------------->
			<a class="projects-overview__project-box carport" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="work">
			</a>

			<!-- box-6 (about-app) ----------------------->
			<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="work">
			</a>

			<!-- box-1 (about-app) ----------------------->
			<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg" alt="work">
			</a>

			<!-- box-2 (about-website) ----------------------->
			<a class="projects-overview__project-box terrasse" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg" alt="work">
			</a>

			<!-- box-3 (about-ai) ----------------------->
			<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg" alt="work">
			</a>

			<!-- box-4 (about-design) ----------------------->
			<a class="projects-overview__project-box wintergarten terrasse" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="work">
			</a>

			<!-- box-5 (about-design) ----------------------->
			<a class="projects-overview__project-box carport" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="work">
			</a>

			<!-- box-6 (about-app) ----------------------->
			<a class="projects-overview__project-box kueche" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="work">
			</a>

		</div>




	</div>

</section>
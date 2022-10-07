<?php
/**
* Template Name: Seite Projekte
*/

get_header( 'tischlerei' );
?>

		<main class="site-main">
			<div class="site-content">

				<section class="projects site-intro">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Räume zum Durchstöbern</p>
						<div class="wrapper">
							<p class="">
								Hier zeigen wir her was wir können. Wir bieten einige Räume zum Durchstöbern. Von Wohnküchen über Wohlfühlbüros bis hin zum ganz persönlichen Rückzugsort.
							</p>
						</div>
						<?php echo do_shortcode("[shortcode_projects_overview]"); ?>
					</article>
				</section>

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

				<section class="project-overview-box">
					<article class="project-overview-box__container">
						<a href="<?php the_permalink() ?>">
							<img class="project-overview-box__img img--project-overview-right-aligned lazyload" src="<?php echo $featured_img_url; ?>" alt="<?php echo $alt_text ;?>">
						</a>
						<div class="wrapper">
							<h2 class="project-overview-box__title h2__heading"><?php the_title();?></h2>
							<p class="project-overview-box__meta h2__subheading"><?php the_field('project-city');?> - <?php the_field('project-date');?></p>
							<p class="project-overview__summary">
								<?php the_field('project-summary');?>
							</p>
						</div>
					</article>
				</section>
				<?php endwhile;
					wp_reset_postdata();
				?>

				<div class="project-overview-box__button-container">
					<div id="loadMoreProjects" class="project-overview-box__button btn btn--red btn--centered-aligned">Weitere Projekte laden</div>
				</div>


				<?php echo do_shortcode("[shortcode_faqs]"); ?>

				<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="Platzhalter-Bild">

				<?php echo do_shortcode("[shortcode_recall]"); ?>

			</div>
		</main>

	<?php get_footer(); ?>
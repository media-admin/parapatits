<?php
/**
* Template Name: Seite Standard
*/
get_header();
?>
	<main class="site-main">
		<div class="site-content">
			<section class="info-section box--left-aligned">
				<article class="wrapper content-wrapper">
					<h1 class="site-title h1__title">
						<?php the_title();?>
					</h1>
					<div class="wrapper">
						<?php
							global $post;
							$content = apply_filters('the_content',$post->post_content);
							echo $content;
						?>
					</div>
					</article>
			</section>
		</div>
	</main>
<?php get_footer(); ?>
<?php
/**
* Template Name: Seite Standard
*/
get_header();
?>
	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title">
						<?php the_title();?>
					</h1>
					<div class="page__content-container wrapper">
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
<?php
/**
 * Template Name: Seite Kontakt
 */

get_header(); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper no-margin-bottom--small">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir freuen uns auf Ihren Anruf, Ihr E-Mail oder Ihre Postkarte.</p>
					</article>
				</div>
				<div class="unstacked-right no-margin-bottom--small">
					<img class="img--centered lazyload" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/kontakt/cut-for-web_highres-4-DSC03241_web.jpg" alt="Wir freuen uns auf Ihre Anfrage!">
				</div>
			</section>

			<section class="contact box--right-aligned unstacked-wrapper">
				<div class="unstacked-left no-margin-bottom--small">
					<article class="wrapper">
						<?php
      $args = [
        "post_status" => "publish",
        "posts_per_page" => 1,
        "post_type" => "company-details",
      ];

      $loop = new WP_Query($args);

      while ($loop->have_posts()):
        $loop->the_post(); ?>

						<div class="contact__wrapper">
							<p data-inviewport="entrance-fade-bottom" class="contact__data">
								<strong>Peter Parapatits</strong><br>
								<?php the_field("company-adress"); ?>
								<a class="contact__data-phone" href="tel:<?php the_field(
          "phone-number-primary"
        ); ?>"><?php the_field("phone-number-primary"); ?></a><br>
								<a class="contact__data-cellphone" href="tel:<?php the_field(
          "phone-number-secondary"
        ); ?>"><?php the_field("phone-number-secondary"); ?></a><br>
								<a class="contact__data-mail" href="mailto:<?php the_field(
          "email-primary"
        ); ?>"><?php the_field("email-primary"); ?></a><br>
							</p>
							<ul data-inviewport="entrance-fade-bottom" class="contact__data-social-media-area">
								<li><a href="https://www.facebook.com/Tischlerwerkst%C3%A4tte-Parapatits-Peter-101976324759010" target="_blank"><img class="contact__data-social-media-icon contact__data-social-media-icon--facebook lazyload" src="<?php bloginfo(
          "template_directory"
        ); ?>/assets/images/icons/facebook-icon.svg" alt="Facebook Logo"></a></li>
								<li><a href="https://www.instagram.com/tischlereiparapatits/" target="_blank"><img class="contact__data-social-media-icon contact__data-social-media-icon--instragram lazyload" src="<?php bloginfo(
          "template_directory"
        ); ?>/assets/images/icons/instagram-icon.svg" alt="Instagram Logo"></a></li>
							</ul>
						</div>
					</article>
				</div>


				<div class="contact__data-opening-hours box--left-aligned unstacked-right">

					<?php if (have_rows("opening-hours")):
       // Check rows exists.

       while (have_rows("opening-hours")):

         // Loop through rows.

         the_row();

         // Load sub field value.
         $hours_monday = get_sub_field("hours_monday");
         $hours_tuesday = get_sub_field("hours_tuesday");
         $hours_wednesday = get_sub_field("hours_wednesday");
         $hours_thursday = get_sub_field("hours_thursday");
         $hours_friday = get_sub_field("hours_friday");
         $hours_saturday = get_sub_field("hours_saturday");
         $hours_sunday = get_sub_field("hours_sunday");
         ?>

						<article class="wrapper">
							<div class="">
								<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Bürozeiten</h2>
								<div data-inviewport="entrance-fade-bottom" class="contact__data-opening-hours-table">
									<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Mo:</div><div class="contact__data-opening-hours-table-row-hours"><?php echo $hours_monday; ?></div>
									<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Di:</div><div class="contact__data-opening-hours-table-row-hours"><?php echo $hours_tuesday; ?></div>
									<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Mi:</div><div class="contact__data-opening-hours-table-row-hours"><?php echo $hours_wednesday; ?></div>
									<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Do:</div><div class="contact__data-opening-hours-table-row-hours"><?php echo $hours_thursday; ?></div>
									<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Fr:</div><div class="contact__data-opening-hours-table-row-hours"><?php echo $hours_friday; ?></div>
								</div>


					<?php
       endwhile;
     endif; ?>

				</div>
			</section>

			<section class="contact__data-map">
				<article class="">
					<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Betriebsstandort</h2>
					<div data-inviewport="entrance-fade-bottom" class="route__map-wrapper" style="background-image: url( '' );">

						<div class="route__map-trigger" data-source="!1m18!1m12!1m3!1d22550.780849488412!2d16.063376692936323!3d47.69719917264329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476dd1eccdefdf47%3A0x6aac0b095cb49c95!2sChristian%20Wei%C3%9Fenb%C3%B6ck%20-%20Fliesenverlegung!5e0!3m2!1sde!2sat!4v1601657589291!5m2!1sde!2sat" data-type="google-maps" loading="lazy"  width="100%" height="100%" allowfullscreen="" aria-hidden="false" tabindex="0">

							<p class="route__map-shariff-infotext container">
								Bitte klicken Sie auf den Button, um die interaktive Google Map anzuzeigen. Somit stimmen Sie sowohl dem zugehörigen Datenaustausch mit Google als auch unseren
								<a href="/datenschutz" target="_blank" rel="noopener noreferrer"> Datenschutzbestimmungen	</a> zu.
							</p>

							<input type="button" class="button--load-more btn btn--red btn--centered-aligned" value="Google Maps laden">
					</div>
				</article>
			</section>

			<?php
      endwhile;
      ?>

			<?php wp_reset_postdata(); ?>

			<?php echo do_shortcode("[shortcode_contact_form]"); ?>

		</div>
	</main>

<?php get_footer();
?>

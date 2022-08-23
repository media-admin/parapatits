<?php
/**
* Template Name: Seite Kontakt
*/

get_header('');
?>

	<main class="site-main">
			<section class="contact box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir freuen uns auf Ihren Anruf, Ihr E-Mail oder Ihre Postkarte.</p>
					<div class="wrapper">
						<p class="contact__data">
							<strong>Peter Parapatits</strong><br>
							Angergasse 10<br>
							7341 Markt Sankt Martin<br>
							<a class="contact__data-phone" href="tel:+4326182221">+43 2618/2221</a><br>
							<a class="contact__data-cellphone" href="tel:+436643079828">+43 664/307 98 28</a><br>
							<a class="contact__data-mail" href="mailto:tischlerei@parapatits.at">tischlerei@parapatits.at</a><br>
						</p>
						<ul class="contact__data-social-media-area">
							<li><a href="https://www.facebook.com/Tischlerwerkst%C3%A4tte-Parapatits-Peter-101976324759010" target="_blank"><img class="contact__data-social-media-icon contact__data-social-media-icon--facebook lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/icons/facebook-icon.svg" alt="Facebook Logo"></a></li>
							<li><a href="https://www.instagram.com/tischlereiparapatits/" target="_blank"><img class="contact__data-social-media-icon contact__data-social-media-icon--instragram lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/icons/instagram-icon.svg" alt="Instagram Logo"></a></li>
						</ul>
					</div>
				</article>
			</section>

			<img class="img--fullwidth lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/kontakt/parapatits-tischlerei_komp-12-DSC03241_web.jpg" alt="Platzhalter-Bild">

			<section class="contact__data-opening-hours box--left-aligned">
				<article class="wrapper">
					<div class="">
						<h2 class="h2__heading">Bürozeiten</h2>
						<div class="contact__data-opening-hours-table">
							<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Mo:</div><div class="contact__data-opening-hours-table-row-hours">08:00 - 12:00, 13:00 - 16:00</div>
							<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Di:</div><div class="contact__data-opening-hours-table-row-hours">08:00 - 12:00, 13:00 - 16:00</div>
							<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Mi:</div><div class="contact__data-opening-hours-table-row-hours">08:00 - 12:00, 13:00 - 16:00</div>
							<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Do:</div><div class="contact__data-opening-hours-table-row-hours">08:00 - 12:00, 13:00 - 16:00</div>
							<div class="contact__data-opening-hours-table-row contact__data-opening-hours-table-row-day">Fr:</div><div class="contact__data-opening-hours-table-row-hours">08:00 - 12:00</div>
						</div>
					</div>
				</article>
			</section>

			<section class="contact__data-map">
				<article class="">
					<h2 class="h2__heading">Betriebsstandort</h2>
					<div class="route__map-wrapper" style="background-image: url( '' );">

						<div class="route__map-trigger" data-source="!1m18!1m12!1m3!1d22550.780849488412!2d16.063376692936323!3d47.69719917264329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476dd1eccdefdf47%3A0x6aac0b095cb49c95!2sChristian%20Wei%C3%9Fenb%C3%B6ck%20-%20Fliesenverlegung!5e0!3m2!1sde!2sat!4v1601657589291!5m2!1sde!2sat" data-type="google-maps" loading="lazy"  width="100%" height="100%" allowfullscreen="" aria-hidden="false" tabindex="0">

							<p class="route__map-shariff-infotext container">
								Bitte klicken Sie auf den Button, um die interaktive Google Map anzuzeigen. Somit stimmen Sie sowohl dem zugehörigen Datenaustausch mit Google als auch unseren
								<a href="/datenschutz" target="_blank" rel="noopener noreferrer"> Datenschutzbestimmungen	</a> zu.
							</p>

							<input type="button" class="button--load-more btn btn--red btn--centered-aligned" value="Google Maps laden">
					</div>
				</article>
			</section>


			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
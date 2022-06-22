</div>

<footer>

	<div class="container">

		<div class="columns">

			<div class="footer_contact-details footer__logo column">
				<img class="marketing-brand" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/LogoWeiss21rgbTRANSP.png" alt="RGH WEISS KG - Werbung wirkt">
				<p class="footer_contact-details">Wiener Neustädter Straße 13<br/>
					2493 Lichtenwörth-Nadelburg<br/>
					Österreich / Austria</p>
			</div>

			<div class="footer__opening-hours column">
					<h2 class="footer__header-title">Öffnungszeiten</h2>
					<table class="footer_table-opening-hours">
						<tr>
							<td class="opening-hours__days has-text-right">MO - DO</td>
							<td class="opening-hours__time has-text-left">07:30 bis 12:00 Uhr &<br/>13:00 bis 17:00 Uhr</td>
						</tr>
						<tr>
							<td class="opening-hours__days has-text-right">FR</td>
							<td class="opening-hours__time has-text-left">07:30 bis 11:00 Uhr</td>
						</tr>
					</table>
			</div>

			<div class="footer__footer-menu column">

				<h2 class="footer__header-title">Informationen</h2>

				<nav class="footer__menu">
					<ul>
						<?php
							wp_nav_menu(array(
								'walker' => new Footer_Walker(),
								'menu' => 'footer-menu',
								'theme_location'=> 'Footermenü',
								'container'=> '<ul>',
								'menu_class' => '',
								'items_wrap'=> '%3$s',
								'fallback_cb'=> false
							));
						?>
					</ul>
				</nav>

			</div>

		</div>

	</div>

	<div class="footer__copyright-area">
		<div class="container">
			<p class="footer__copyright-text">© <?php echo date("Y");?> RGH WEISS KG. </p>
		</div>
	</div>

	</div>

</footer>

</div>

<?php wp_footer();?>

<!-- Slick Header Slider Settings -->
<script>

	jQuery(document).ready(function(){
		jQuery('.header__slider-carousel').slick({
			dots: true,
			infinite: true,
			speed: 3500,
			slidesToShow: 1,
			adaptiveHeight: false,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 1500,
			fade: true,
			cssEase: 'ease-out'
		});
	});

</script>


<!-- Slick Brands Slider Settings -->
<script>

	jQuery(document).ready(function(){
		jQuery('.responsive').slick({
			dots: false,
			infinite: true,
			autoplay: true,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
	});

</script>



</body>

</html>
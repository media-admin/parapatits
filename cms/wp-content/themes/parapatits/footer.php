	<footer class="site-footer">

			<section class="site-footer__contact">
				<p class="site-footer__contact-data">
					Peter Parapatits<br>
					Angergasse 10<br>
					7341 Markt Sankt Martin<br>
					<a href="tel:+4326182221">+43 2618/2221</a><br>
					<a href="mailto:tischlerei@parapatits.at">tischlerei@parapatits.at</a><br>
				</p>
				<ul class="site-footer__contact-social-media-area">
					<li><a href="https://www.facebook.com/Tischlerwerkst%C3%A4tte-Parapatits-Peter-101976324759010" target="_blank"><img class="footer-contact__social-media-icon footer-contact__social-media-icon--facebook" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/icons/facebook-icon.svg" alt="Facebook Logo"></a></li>
					<li><a href="https://www.instagram.com/tischlereiparapatits/" target="_blank"><img class="footer-contact__social-media-icon footer-contact__social-media-icon--instragram" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/icons/instagram-icon.svg" alt="Instagram Logo"></a></li>
				</ul>
			</section>

			<nav class="site-footer__navigation">
				<ul class="site-footer__navigation-list">
					<?php
						wp_nav_menu(array(
							'walker' => new Footer_Walker(),
							'menu' => 'Footermenü',
							'theme_location'=> 'nav-menu-footer',
							'container'=> '<ul>',
							'menu_class' => 'footer-navigation__list',
							'items_wrap'=> '%3$s',
							'fallback_cb'=> false
						));
					?>
				</ul>
			</nav>

			<p class="site-footer__copyright">alle Rechte vorbehalten ©&nbsp;2022</p>

		</footer>

		<?php wp_footer();?>

		<!-- START SCRIPTS AREA -->

		<!-- Hamburger Menu Toggle -->
		<script type="text/javascript">
			var navigation = document.querySelector(".main-navigation");
			var hamburger = document.querySelector(".burger-menu");

		 	navigation.onclick = function () {
				this.classList.toggle ("is-active");
			}

			hamburger.onclick = function () {
				this.classList.toggle ("checked");
			}
		</script>


		<!-- Accordion -->
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
					}
				});
			}
		</script>

		<!-- Slick Sliders -->

		<script type="text/javascript">

			jQuery('.home-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: false,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 5000,
				speed: 1500,
				fade: true,
				cssEase: 'linear'
			});

		</script>



		<script type="text/javascript">

			jQuery('.single-item').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true,
			});

		</script>


		<script type="text/javascript">

			jQuery('.project-carousel-center').slick({
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 1,
				arrows: true,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
							arrows: true,
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							arrows: true,
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: true,
						}
					}
				]
			});

		</script>


		<!-- Projects -->
		<script type="text/javascript">

			/* ---- for-filter-menu -----------------------------------------------*/
			jQuery(document).on('click','.project-filter li',function(){
				jQuery(this).addClass('project-filter-active').siblings().removeClass('project-filter-active')
			});

			/* ---- for-project/work-filter -----------------------------------------------*/
			jQuery(document).ready(function(){
				jQuery('.list').click(function(){
					const value = jQuery(this).attr('data-filter');
					if(value == 'alle'){
						jQuery('.project-box').show('1000');
					}
					else {
						jQuery('.project-box').not('.'+value).hide('1000');
						jQuery('.project-box').filter('.'+value).show('1000');
					}
				})
			});

		</script>


		<!-- Button Load More -->
		<script type="text/javascript">
			jQuery(function () {
					x=3;
					jQuery('.project-container a').slice(0, 3).show();
					jQuery('#loadMore').on('click', function (e) {
							e.preventDefault();
							x = x+3;
							jQuery('.project-container a').slice(0, x).slideDown();
					});
			});
		</script>

		<!-- END SCRIPTS AREA -->

	</body>

</html>
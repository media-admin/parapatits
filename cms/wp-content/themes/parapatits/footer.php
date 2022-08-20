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
					<li class="site-footer__navigation-list-item"><a href="/impressum">Impressum</a></li>
					<li class="site-footer__navigation-list-item"><a href="/datenschutz">Datenschutz</a></li>
					<li class="site-footer__navigation-list-item"><a href="/agb">AGB</a></li>
				</ul>
			</nav>

			<nav class="site-footer__navigation">
					<?php
						wp_nav_menu(array(
							'walker' => new Footer_Walker(),
							'menu' => 'footer-menu',
							'theme_location'=> 'Footermenü',
							'container'=> 'ul',
							'menu_class' => 'footer-navigation__list',
							'items_wrap'=> '%3$s',
							'fallback_cb'=> false
						));
					?>
			</nav>

			<p class="site-footer__copyright">alle Rechte vorbehalten ©&nbsp;2022</p>

		</footer>

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

		<!-- Accordions -->
		<script type="text/javascript">
			jQuery(document).ready(function() {
				$("#accordion article h2").click(function(e) {
					$(this).parents().siblings("article").addClass("accordion__item-hidden");
					$(this).parents("article").removeClass("accordion__item-hidden");

					e.preventDefault();
				});
			});
		</script>


		<!-- Slick Sliders -->
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

		<script src="assets/scripts/modules/slick.min.js"></script>

		<script type="text/javascript">

			$('.references-carousel').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				arrows: true,
				dots: true,
				centerMode: true,
				focusOnSelect: true
			});

		</script>


		<script type="text/javascript">

			$('.project-carousel-center').slick({
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
			$(document).on('click','.project-filter li',function(){
				$(this).addClass('project-filter-active').siblings().removeClass('project-filter-active')
			});

			/* ---- for-project/work-filter -----------------------------------------------*/
			$(document).ready(function(){
				$('.list').click(function(){
					const value = $(this).attr('data-filter');
					if(value == 'all'){
						$('.project-box').show('1000');
					}
					else {
						$('.project-box').not('.'+value).hide('1000');
						$('.project-box').filter('.'+value).show('1000');
					}
				})
			});

		</script>

		<script src="lightbox.js"></script>

		<!-- Button Load More -->
		<script type="text/javascript">
			$(function () {
					x=2;
					$('.project-container a').slice(0, 2).show();
					$('#loadMore').on('click', function (e) {
							e.preventDefault();
							x = x+2;
							$('.project-container a').slice(0, x).slideDown();
					});
			});
		</script>

		<!-- END SCRIPTS AREA -->

		<?php wp_footer();?>

	</body>

</html>
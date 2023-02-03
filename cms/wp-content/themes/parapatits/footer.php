	<footer class="site-footer">
		<div class="site-footer__row">
			<section class="site-footer__contact-data">
				<p class="">
					Peter Parapatits<br>
					Angergasse 10<br>
					7341 Markt Sankt Martin<br>
					<a href="tel:+4326182221">+43 2618/2221</a><br>
					<a href="mailto:tischlerei@parapatits.at">tischlerei@parapatits.at</a><br>
				</p>
			</section>

			<section class="site-footer__contact-social-media">
				<ul class="site-footer__contact-social-media-area">
					<li><a href="https://www.facebook.com/Tischlerwerkst%C3%A4tte-Parapatits-Peter-101976324759010" target="_blank"><img class="footer-contact__social-media-icon footer-contact__social-media-icon--facebook" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/icons/facebook-icon.svg" alt="Facebook Logo"></a></li>
					<li><a href="https://www.instagram.com/tischlereiparapatits/" target="_blank"><img class="footer-contact__social-media-icon footer-contact__social-media-icon--instagram" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/icons/instagram-icon.svg" alt="Instagram Logo"></a></li>
				</ul>
			</section>

			<section class="site-footer__navigation">
				<nav class="">
					<ul class="site-footer__navigation-list">
						<?php wp_nav_menu([
        "walker" => new Footer_Walker(),
        "menu" => "Footermenü",
        "theme_location" => "nav-menu-footer",
        "container" => "<ul>",
        "menu_class" => "footer-navigation__list",
        "items_wrap" => '%3$s',
        "fallback_cb" => false,
      ]); ?>
					</ul>
				</nav>
				<p class="site-footer__copyright">alle Rechte vorbehalten ©&nbsp;<?php echo date(
      "Y"
    ); ?></p>
			</section>
		</div>

			<!-- <div class="site-footer__copyright">
				<p class="site-footer__copyright">alle Rechte vorbehalten ©&nbsp;2022</p>
			</div> -->

		</footer>

		<?php wp_footer(); ?>

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
						panel.style.maxHeight = panel.scrollHeight + 50 + "px";
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


		<!-- Testimonial Sliders -->

		<script type="text/javascript">

			jQuery('.single-item').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 800,
			});

		</script>


		<script type="text/javascript">

			jQuery('.project-carousel__projects-container').slick({
				dots: true,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 800,
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,

				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							arrows: false,
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							arrows: false,
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: false,
							centerPadding: '40px',
						}
					}
				]
			});

		</script>


		<!-- <script>
			// Iterate over each select element
			jQuery('select').each(function () {

					// Cache the number of options
					var $this = jQuery(this),
						numberOfOptions = jQuery(this).children('option').length;

					// Hides the select element
					$this.addClass('s-hidden');

					// Wrap the select element in a div
					$this.wrap('<div class="select"></div>');

					// Insert a styled div to sit over the top of the hidden select element
					$this.after('<div class="styledSelect"></div>');

					// Cache the styled div
					var $styledSelect = $this.next('div.styledSelect');

					// Show the first select option in the styled div
					$styledSelect.text($this.children('option').eq(0).text());

					// Insert an unordered list after the styled div and also cache the list
					var $list = jQuery('<ul />', {
							'class': 'options'
					}).insertAfter($styledSelect);

					// Insert a list item into the unordered list for each select option
					for (var i = 0; i < numberOfOptions; i++) {
							jQuery('<li />', {
									text: $this.children('option').eq(i).text(),
									rel: $this.children('option').eq(i).val()
							}).appendTo($list);
					}

					// Cache the list items
					var $listItems = $list.children('li');

					// Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
					$styledSelect.click(function (e) {
							e.stopPropagation();
							jQuery('div.styledSelect.active').each(function () {
									jQuery(this).removeClass('active').next('ul.options').hide();
							});
							jQuery(this).toggleClass('active').next('ul.options').toggle();
					});

					// Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
					// Updates the select element to have the value of the equivalent option
					$listItems.click(function (e) {
							e.stopPropagation();
							$styledSelect.text(jQuery(this).text()).removeClass('active');
							$this.val(jQuery(this).attr('rel'));
							$list.hide();
							/* alert($this.val()); Uncomment this for demonstration! */
					});

					// Hides the unordered list when clicking outside of it
					jQuery(document).click(function () {
							$styledSelect.removeClass('active');
							$list.hide();
					});

			});
		</script> -->


		<!-- Projects -->
		<script type="text/javascript">

			/* ---- for-filter-menu -----------------------------------------------*/
			jQuery(document).on('click','.projects-overview__project-filters li',function(){
				jQuery(this).addClass('projects-overview__project-filter--active').siblings().removeClass('projects-overview__project-filter--active')
			});

			/* ---- for-project/work-filter -----------------------------------------------*/
			jQuery(document).ready(function(){
				jQuery('.projects-overview__list').click(function(){
					const value = jQuery(this).attr('data-filter');
					if(value == 'alle'){
						jQuery('.projects-overview__project-box').show('1000');
					}
					else {
						jQuery('.projects-overview__project-box').not('.'+value).hide('1000');
						jQuery('.projects-overview__project-box').filter('.'+value).show('1000');
					}
				})
			});

		</script>




		<!-- Button Load More -->
		<!-- <script type="text/javascript">
			jQuery(function () {
					x=4;
					jQuery('.projects-overview__project-container a').slice(0, 4).show();
					jQuery('#loadMore').on('click', function (e) {
						e.preventDefault();
						x = x+2;
						/* jQuery('.projects-overview__project-container a').slice(0, x).slideDown(); */
						jQuery('.projects-overview__project-container a').slice(0, x).show();

					});
			});
		</script> -->


		<!-- Button Load More -->
		<script type="text/javascript">
			jQuery(function () {
				x=4;
				jQuery(".projects-overview__project-container a").slice(0, 4).show();
				jQuery("#loadMore").on('click', function (e) {
						e.preventDefault();
						x = x+2;
						/* jQuery('.projects-overview__project-container a').slice(0, x).slideDown(); */
						jQuery(".projects-overview__project-container a").slice(0, 4).slideDown();
						jQuery('.projects-overview__project-container a').slice(0, x).show();

						/* jQuery('html,body').animate({
							scrollTop: jQuery(this).offset().top
						}, 1500); */

						if (jQuery(".projects-overview__project-container a:hidden").length == 0) {
								jQuery("#loadMore").hide();
						}
				});
			});
		</script>


		<!-- Button Load More Projects -->
		<!-- 		<script type="text/javascript">
			jQuery(function () {
					x=2;
					jQuery('.project-overview-box .project-overview-box__container').slice(0, 2).show();
					jQuery('#loadMoreProjects').on('click', function (e) {
						e.preventDefault();
						x = x+2;
						/* jQuery('.projects-overview__project-container a').slice(0, x).slideDown(); */
						jQuery('.projects-overview__project-container a').slice(0, x).show();
					});
			});
		</script> -->


		<!-- Button Load More Projects -->
		<!-- <script type="text/javascript">
			jQuery(function () {
				x=4;
				jQuery(".project-overview-box .project-overview-box__container").slice(0, 4).show();
				jQuery("#loadMoreProjects").on('click', function (e) {
						e.preventDefault();


						x = x+2;
						/* jQuery('.projects-overview__project-container a').slice(0, x).slideDown(); */
						jQuery('.projects-overview__project-container a').slice(0, x).show();


						/* jQuery('html,body').animate({
							scrollTop: jQuery(this).offset().top
						}, 1500); */

						if (jQuery(".projects-overview__project-container a:hidden").length == 0) {
								jQuery("#loadMoreProjects").hide();
						}
				});
			});
		</script> -->











		<!-- Checks if the element is in view-->
<!-- 		<script type="text/javascript">
			// function to detect if an element is scrolled into view
			function isScrolledIntoView(elem) {
				var docViewTop = jQuery(window).scrollTop();
				var docViewBottom = docViewTop + jQuery(window).height();

				var elemTop = jQuery(elem).offset().top;
				var elemBottom = elemTop + jQuery(elem).height();

				return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
			};

			// listen for scroll event
			jQuery(window).scroll(function () {
				// check if element is scrolled into view
				if (isScrolledIntoView(jQuery('.entrance-fade-bottom'))) {
					// element is scrolled into view, add animation class
					jQuery('.entrance-fade-bottom').addClass('animation');
				}

				if (isScrolledIntoView(jQuery('.entrance-fade-top'))) {
					// element is scrolled into view, add animation class
					jQuery('.entrance-fade-top').addClass('animation');
				}

				if (isScrolledIntoView(jQuery('.entrance-fade-center'))) {
					// element is scrolled into view, add animation class
					jQuery('.entrance-fade-center').addClass('animation');
				}

				if (isScrolledIntoView(jQuery('.entrance-fade-left'))) {
					// element is scrolled into view, add animation class
					jQuery('.entrance-fade-left').addClass('animation');
				}

				if (isScrolledIntoView(jQuery('.entrance-fade-right'))) {
					// element is scrolled into view, add animation class
					jQuery('.entrance-fade-right').addClass('animation');
				}

			});
		</script> -->







		<!-- Checks if the element is in view - ALTERNATIVE WAY -->
		<!-- <script type="text/javascript">
			document.addEventListener("DOMContentLoaded", function(event) {
					document.addEventListener("scroll", function(event) {
							const animatedBoxes = document.getElementsByClassName("a-fade-bottom");
							const windowOffsetTop = window.innerHeight + window.scrollY;

							Array.prototype.forEach.call(animatedBoxes, (animatedBox) => {
									const animatedBoxOffsetTop = animatedBox.offsetTop;

									if (windowOffsetTop >= animatedBoxOffsetTop) {
											addClass(animatedBox, "entrance-fade-bottom");
									}
							});
					});
			});

			function addClass(element, className) {
					const arrayClasses = element.className.split(" ");
					if (arrayClasses.indexOf(className) === -1) {
							element.className += " " + className;
					}
			}
		</script> -->





		<!-- Checks if the element is in view - WORKING INFINIT
		<script type="text/javascript">
			const inViewport = (entries, observer) => {
				entries.forEach(entry => {
					entry.target.classList.toggle("is-inViewport", entry.isIntersecting);
				});
			};

			const Obs = new IntersectionObserver(inViewport);
			const obsOptions = {}; //See: https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API#Intersection_observer_options

			// Attach observer to every [data-inviewport] element:
			const ELs_inViewport = document.querySelectorAll('[data-inviewport]');
			ELs_inViewport.forEach(EL => {
				Obs.observe(EL, obsOptions);
			});
		</script>
		-->


		<!-- Checks if the element is in view - WORKING ONCE -->
		<script type="text/javascript">
			const elements = document.querySelectorAll('[data-inviewport]');
			const callback = str => { console.log(str); };
			const observer = new IntersectionObserver(handleIntersection);

			elements.forEach(obs => {
				observer.observe(obs);
			});

			function handleIntersection(entries, observer){
				entries.forEach(entry => {
					if (entry.intersectionRatio > 0) {
						entry.target.classList.toggle("is-inViewport", entry.isIntersecting);
						observer.unobserve(entry.target);
					}
				});
			}
		</script>














		<!-- Rellax Effect -->

		<script src="https://parapatits.dev/cms/wp-content/themes/parapatits/assets/scripts/rellax.min.js"></script>

		<script>
			var rellax = new Rellax('.rellaxx');
		</script>


		<!-- Jumping Square -->
		<script type="text/javascript">
			jQuery(function($) {
				jQuery('#jumping-img').mouseover(function() {
					var dWidth = jQuery(document).width() - 100, // 100 = image width
							dHeight = jQuery(document).height() - 100, // 100 = image height
							nextX = Math.floor(Math.random() * dWidth),
							nextY = Math.floor(Math.random() * dHeight);
					jQuery(this).animate({ left: nextX + 'px', top: nextY + 'px' });
				});
			});
		</script>



		<!-- END SCRIPTS AREA -->

	</body>

</html>
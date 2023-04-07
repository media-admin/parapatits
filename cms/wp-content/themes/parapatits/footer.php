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

		<!-- Allows open all Accordion items

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
		-->

		<!-- Allows open only one Accordion item at a time -->
		<script>
			var acc = document.querySelectorAll(".accordion");
			var active = null;

			acc.forEach((item, i) => {
				item.addEventListener("click", function () {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;

					if(active) {
						active.style.maxHeight = null;
					}

					if(panel !== active) {
						panel.style.maxHeight = panel.scrollHeight + "px";
						active = panel
					} else {
						active = null
					}
				});
			});
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
						breakpoint: 791,
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




	<!-- Dancing Square
	<script type="text/javascript">
		let lastX, lastY, lastScrolled = 0;;
		jQuery(document).on('mousemove', function(e) {
			lastX = e.pageX - 30;
			lastY = e.pageY - 25;
			jQuery('#jumping-img').css({
				left: e.pageX - 30,
				top: e.pageY - 25,
				pointerEvents: 'none'
			});
		});

		jQuery(window).scroll(function(event) {
			if (lastScrolled != $(window)
				.scrollTop()) {
				lastY -= lastScrolled;
				lastScrolled = $(window)
					.scrollTop();
				lastY += lastScrolled;
			}
			jQuery('#jumping-img').css({
				left: lastX,
				top: lastY,
				pointerEvents: 'none'
			});
		});
	</script>
	-->


	<!-- Jumping Square
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
	-->


	<!-- Jumping Square NOT WORKING
	<script type="text/javascript">
	function moveImg(e){
		// get page X and Y axis.
		let lastX, lastY, lastScrolled = 0;
		lastX = e.pageX - 5;
		lastY = e.pageY - 5;


		jQuery('#jumping-img:before').css({
			left: e.pageX - 5,
			top: e.pageY - 5,
			pointerEvents: 'none'
		});

	}
	</script>
	-->


	<!-- Jumping Square SECOND TRY
	<script type="text/javascript">

		var startMove;

		jQuery(document).mousemove(function(e){
				var difLeft = jQuery('.img--wood-square-before').offset().left - e.pageX;
				var difTop = jQuery('.img--wood-square-before').offset().top - e.pageY;

				if(difLeft < 10 && difLeft > -10 && difTop < 10 && difTop > -10 ){
					startMove = true;
				}
				if(startMove){
					jQuery(".img--wood-square-before").css({
						left: e.pageX -750,
						top: e.pageY -50,
					});
				}
		});


		/* jQuery(document).mouseleave(function(){
				startMove = false;
		}) */
	</script>
	-->

	<!-- Rellax Effect -->

	<script>

		(function(q,g){"function"===typeof define&&define.amd?define([],g):"object"===typeof module&&module.exports?module.exports=g():q.Rellax=g()})("undefined"!==typeof window?window:global,function(){var q=function(g,u){function C(){if(3===a.options.breakpoints.length&&Array.isArray(a.options.breakpoints)){var f=!0,c=!0,b;a.options.breakpoints.forEach(function(a){"number"!==typeof a&&(c=!1);null!==b&&a<b&&(f=!1);b=a});if(f&&c)return}a.options.breakpoints=[576,768,1201];console.warn("Rellax: You must pass an array of 3 numbers in ascending order to the breakpoints option. Defaults reverted")}
		var a=Object.create(q.prototype),l=0,v=0,m=0,n=0,d=[],w=!0,A=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame||function(a){return setTimeout(a,1E3/60)},p=null,x=!1;try{var k=Object.defineProperty({},"passive",{get:function(){x=!0}});window.addEventListener("testPassive",null,k);window.removeEventListener("testPassive",null,k)}catch(f){}var D=window.cancelAnimationFrame||window.mozCancelAnimationFrame||
		clearTimeout,E=window.transformProp||function(){var a=document.createElement("div");if(null===a.style.transform){var c=["Webkit","Moz","ms"],b;for(b in c)if(void 0!==a.style[c[b]+"Transform"])return c[b]+"Transform"}return"transform"}();a.options={speed:-2,verticalSpeed:null,horizontalSpeed:null,breakpoints:[576,768,1201],center:!1,wrapper:null,relativeToWrapper:!1,round:!0,vertical:!0,horizontal:!1,verticalScrollAxis:"y",horizontalScrollAxis:"x",callback:function(){}};u&&Object.keys(u).forEach(function(d){a.options[d]=
		u[d]});u&&u.breakpoints&&C();g||(g=".rellax");k="string"===typeof g?document.querySelectorAll(g):[g];if(0<k.length){a.elems=k;if(a.options.wrapper&&!a.options.wrapper.nodeType)if(k=document.querySelector(a.options.wrapper))a.options.wrapper=k;else{console.warn("Rellax: The wrapper you're trying to use doesn't exist.");return}var F,B=function(){for(var f=0;f<d.length;f++)a.elems[f].style.cssText=d[f].style;d=[];v=window.innerHeight;n=window.innerWidth;f=a.options.breakpoints;F=n<f[0]?"xs":n>=f[0]&&n<
		f[1]?"sm":n>=f[1]&&n<f[2]?"md":"lg";H();for(f=0;f<a.elems.length;f++){var c=void 0,b=a.elems[f],e=b.getAttribute("data-rellax-percentage"),y=b.getAttribute("data-rellax-speed"),t=b.getAttribute("data-rellax-xs-speed"),g=b.getAttribute("data-rellax-mobile-speed"),h=b.getAttribute("data-rellax-tablet-speed"),k=b.getAttribute("data-rellax-desktop-speed"),l=b.getAttribute("data-rellax-vertical-speed"),m=b.getAttribute("data-rellax-horizontal-speed"),p=b.getAttribute("data-rellax-vertical-scroll-axis"),
		q=b.getAttribute("data-rellax-horizontal-scroll-axis"),u=b.getAttribute("data-rellax-zindex")||0,x=b.getAttribute("data-rellax-min"),A=b.getAttribute("data-rellax-max"),C=b.getAttribute("data-rellax-min-x"),D=b.getAttribute("data-rellax-max-x"),E=b.getAttribute("data-rellax-min-y"),L=b.getAttribute("data-rellax-max-y"),r=!0;t||g||h||k?c={xs:t,sm:g,md:h,lg:k}:r=!1;t=a.options.wrapper?a.options.wrapper.scrollTop:window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop;a.options.relativeToWrapper&&
		(t=(window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop)-a.options.wrapper.offsetTop);var z=a.options.vertical?e||a.options.center?t:0:0,I=a.options.horizontal?e||a.options.center?a.options.wrapper?a.options.wrapper.scrollLeft:window.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft:0:0;t=z+b.getBoundingClientRect().top;g=b.clientHeight||b.offsetHeight||b.scrollHeight;h=I+b.getBoundingClientRect().left;k=b.clientWidth||b.offsetWidth||b.scrollWidth;
		z=e?e:(z-t+v)/(g+v);e=e?e:(I-h+n)/(k+n);a.options.center&&(z=e=.5);c=r&&null!==c[F]?Number(c[F]):y?y:a.options.speed;l=l?l:a.options.verticalSpeed;m=m?m:a.options.horizontalSpeed;p=p?p:a.options.verticalScrollAxis;q=q?q:a.options.horizontalScrollAxis;y=J(e,z,c,l,m);b=b.style.cssText;r="";if(e=/transform\s*:/i.exec(b))r=b.slice(e.index),r=(e=r.indexOf(";"))?" "+r.slice(11,e).replace(/\s/g,""):" "+r.slice(11).replace(/\s/g,"");d.push({baseX:y.x,baseY:y.y,top:t,left:h,height:g,width:k,speed:c,verticalSpeed:l,
		horizontalSpeed:m,verticalScrollAxis:p,horizontalScrollAxis:q,style:b,transform:r,zindex:u,min:x,max:A,minX:C,maxX:D,minY:E,maxY:L})}K();w&&(window.addEventListener("resize",B),w=!1,G())},H=function(){var d=l,c=m;l=a.options.wrapper?a.options.wrapper.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop||window.pageYOffset;m=a.options.wrapper?a.options.wrapper.scrollLeft:(document.documentElement||document.body.parentNode||document.body).scrollLeft||window.pageXOffset;
		a.options.relativeToWrapper&&(l=((document.documentElement||document.body.parentNode||document.body).scrollTop||window.pageYOffset)-a.options.wrapper.offsetTop);return d!=l&&a.options.vertical||c!=m&&a.options.horizontal?!0:!1},J=function(d,c,b,e,g){var f={};d=100*(g?g:b)*(1-d);c=100*(e?e:b)*(1-c);f.x=a.options.round?Math.round(d):Math.round(100*d)/100;f.y=a.options.round?Math.round(c):Math.round(100*c)/100;return f},h=function(){window.removeEventListener("resize",h);window.removeEventListener("orientationchange",
		h);(a.options.wrapper?a.options.wrapper:window).removeEventListener("scroll",h);(a.options.wrapper?a.options.wrapper:document).removeEventListener("touchmove",h);p=A(G)},G=function(){H()&&!1===w?(K(),p=A(G)):(p=null,window.addEventListener("resize",h),window.addEventListener("orientationchange",h),(a.options.wrapper?a.options.wrapper:window).addEventListener("scroll",h,x?{passive:!0}:!1),(a.options.wrapper?a.options.wrapper:document).addEventListener("touchmove",h,x?{passive:!0}:!1))},K=function(){for(var f,
		c=0;c<a.elems.length;c++){var b=d[c].verticalScrollAxis.toLowerCase(),e=d[c].horizontalScrollAxis.toLowerCase();f=-1!=b.indexOf("x")?l:0;b=-1!=b.indexOf("y")?l:0;var g=-1!=e.indexOf("x")?m:0;e=-1!=e.indexOf("y")?m:0;f=J((f+g-d[c].left+n)/(d[c].width+n),(b+e-d[c].top+v)/(d[c].height+v),d[c].speed,d[c].verticalSpeed,d[c].horizontalSpeed);e=f.y-d[c].baseY;b=f.x-d[c].baseX;null!==d[c].min&&(a.options.vertical&&!a.options.horizontal&&(e=e<=d[c].min?d[c].min:e),a.options.horizontal&&!a.options.vertical&&
		(b=b<=d[c].min?d[c].min:b));null!=d[c].minY&&(e=e<=d[c].minY?d[c].minY:e);null!=d[c].minX&&(b=b<=d[c].minX?d[c].minX:b);null!==d[c].max&&(a.options.vertical&&!a.options.horizontal&&(e=e>=d[c].max?d[c].max:e),a.options.horizontal&&!a.options.vertical&&(b=b>=d[c].max?d[c].max:b));null!=d[c].maxY&&(e=e>=d[c].maxY?d[c].maxY:e);null!=d[c].maxX&&(b=b>=d[c].maxX?d[c].maxX:b);a.elems[c].style[E]="translate3d("+(a.options.horizontal?b:"0")+"px,"+(a.options.vertical?e:"0")+"px,"+d[c].zindex+"px) "+d[c].transform}a.options.callback(f)};
		a.destroy=function(){for(var f=0;f<a.elems.length;f++)a.elems[f].style.cssText=d[f].style;w||(window.removeEventListener("resize",B),w=!0);D(p);p=null};B();a.refresh=B;return a}console.warn("Rellax: The elements you're trying to select don't exist.")};return q});

		var rellax = new Rellax('.rellax', {
			center: true
		});


	</script>






		<!-- END SCRIPTS AREA -->

	</body>

</html>
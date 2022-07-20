//
// BackTotop.js
//

$(document).ready(function(){

	// Button is created via JavaScript and included before the end of the body tag.
	var back_to_top_button = ['<a href="#top" class="back-to-top"><p><img src="../../assets/images/icons/button_back-to-top.svg"</p></a>'].join("");
	$("body").append(back_to_top_button)

	// Button becomes hidden
	$(".back-to-top").hide();

	// Function for Scroll Animation
	$(function () {
		$(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) { // After scrolling 100 Pixel
				jQuery('.back-to-top').fadeIn();
			} else {
				jQuery('.back-to-top').fadeOut();
			}
		});

		$('.back-to-top').click(function () { // Click on the button

			$('html, body').animate({
				scrollTop: $(".site-content").offset().top-120
			}, 800);
		});
	});

});

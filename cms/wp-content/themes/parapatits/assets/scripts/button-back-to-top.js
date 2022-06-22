//
// button-back-to-top.js
//

jQuery(document).ready(function(){   

	// Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
	var back_to_top_button = ['<a href="#top" class="back-to-top"><p>Rauf bitte</p></a>'].join("");
	jQuery("body").append(back_to_top_button)

	// Der Button wird ausgeblendet
	jQuery(".back-to-top").hide();

	// Funktion für das Scroll-Verhalten
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) { // Wenn 100 Pixel gescrolled wurde
				jQuery('.back-to-top').fadeIn();
			} else {
				jQuery('.back-to-top').fadeOut();
			}
		});
	
		jQuery('.back-to-top').click(function () { // Klick auf den Button
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
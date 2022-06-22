<footer class="site-footer">

	<section class="footer-contact">
		<p class="footer-contact__data">
			Peter Parapatits<br>
			Angergasse 10<br>
			7341 Markt Sankt Martin<br>
			<a href="tel:+4326182221">+43 2618/2221</a><br>
			<a href="mailto:tischlerei@parapatits.at">tischlerei@parapatits.at</a><br>
		</p>
		<ul class="footer-contact__social-media-area">
			<li><a href="https://www.facebook.com/Tischlerwerkst%C3%A4tte-Parapatits-Peter-101976324759010" target="_blank"><img class="footer-contact__social-media-icon footer-contact__social-media-icon--facebook" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/facebook-icon.svg" alt="Facebook Logo"></a></li>
			<li><a href="https://www.instagram.com/tischlereiparapatits/" target="_blank"><img class="footer-contact__social-media-icon footer-contact__social-media-icon--instragram" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/instagram-icon.svg" alt="Instagram Logo"></a></li>
		</ul>
	</section>

	<nav class="footer-navigation">
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

	<p class="copyright">alle Rechte vorbehalten ©&nbsp;2022</p>

</footer>

<?php wp_footer();?>

</body>

</html>
<?php
/**
* Template Name: Seite Datenschutz
*/

get_header();
?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<?php
						the_content();
					?>
				</article>
			</section>

			<section class="recall-section container--darkgray">
				<article class="wrapper">
					<div class="recall-section__container">
						<h2 class="recall-section__title h2__title h2__light h2__title--left-aligned">Rückruf vereinbaren</h2>
							<p class="recall-section__text">Hinterlassen Sie uns Ihre Nummer, wir rufen Sie gerne zurück.</p>
							<div class="recall-section__form">
								<input type="text" name="ihr-name" class="recall-section__form-item recall-section__form-item-name" value="" aria-required="true" aria-invalid="false" placeholder="Name*">
								<input type="text" name="ihre-telefonnummer" class="recall-section__form-item recall-section__form-item-phonenumber" value="" aria-required="true" aria-invalid="false" placeholder="Telefonnummer*">
								<span class="wpcf7-list-item">
									<label class="recall-section__form-label-dsgvo-acceptance">
										<input type="checkbox" name="ihre-datenschutzzustimmung" class="recall-section__form-item-dsgvo-checkbox" value="1" aria-required="true" aria-invalid="false" data-rule="name">
										<span class="recall-section__form-item-dsgvo-acceptance">Ich stimme der Verarbeitung meiner Daten gemäß der <a href="/datenschutz" target="_blank">Datenschutzrichtlinie</a> zu.</span>
									</label>
								</span>
								<a class="btn btn--red recall-section__btn open-modal" href="#">Absenden</a>
							</div>
					</div>
				</article>
			</section>

		</div>
	</main>

<?php get_footer(); ?>
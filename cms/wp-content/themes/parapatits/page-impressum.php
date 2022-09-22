<?php
/**
* Template Name: Seite Impressum
*/

get_header();
?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<h1 class="site-title h1__title"><?php the_title();?></h1>
					<p class="">
						<div>Unternehmensname:</div><div>Peter Parapatits</div>
						<div>Rechtsform:</div><div>Einzelunternehmen</div>
						<div>Inhaber:</div><div>Peter Parapatits<br/>
						Angergasse 10<br/>
						7341 Markt Sankt Martin<br/>
						Österreich</div>
						<div>eMail:</div><div><a href="mailto:tischlerei@parapatits.at">tischlerei@parapatits.at</div>
						<div>Telefon:</div><div><a href="tel:004326182221">+43 2618 2221</a></div>
						<div>Internet:</div><div><a href="www.parapatits.at">www.parapatits.at</div>
						<div>Gewerbe:</div><div>Tischlereibetrieb</div>
						<div>Firmenbuchnummer:</div><div>1201293</div>
						<div>WKO Mitglied bei der Wirtschaftskammer Eisenstadt</div><div>&nbsp;</div>
						<div>Gewerbebehörde:</div><div>BH Oberpullendorf</div>
					</p>
				</article>
			</section>

			<section class="site-intro box--left-aligned">
				<article class="wrapper">
					<div class="box--left-aligned">
						<h2 class="Webdesign">Webdesign</h2>

						<h3>Technische Umsetzung</h3>
						<p class="">Markus Tritremmel</p>

						<h3>Konzept und Design</h3>
						<p class="">Alexander Ungersböck</p>

						<h3>Texte</h3>
						<p class="">Elisabeth Zenz</p>

						<a class="btn btn--red btn--centered-aligned" role="button" href="/jobs">Jobdetails anzeigen</a>
					</div>
				</article>
			</section>

			<section class="">
				<article class="wrapper">
					<div class="">
						<h2 class="">Fotocredit/in</h2>
						<ul class="">
							<li>Alexander Ungersböck</li>
							<li>Hannes Gradwohl</li>
							<li>Martin Fueloep</li>
							<li>Birgit Machtinger</li>
						</ul>
					</div>
				</article>
			</section>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer(); ?>
<?php
/**
* Template Name: Seite Projekte
*/

get_header('tischlerei');
?>

		<main class="site-main">
			<div class="site-content">

				<section class="site-intro box--left-aligned">
					<article class="wrapper">
						<h1 class="site-title h1__title"><?php the_title();?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Räume zum Durchstöbern</p>
						<div class="wrapper">
							<p class="">
								Hier zeigen wir her was wir können. Wir bieten einige Räume zum Durchstöbern. Von Wohnküchen über Wohlfühlbüros bis hin zum ganz persönlichen Rückzugsort.
							</p>
							<div class="search-area">
								SUCHFELD
							</div>
						</div>
					</article>
				</section>



				<section id="project">

					<!-- heading ----------------------->
					<div class="project-heading">
						<span>Let's see my Work</span>
						<h3>My Projects</h3>
					</div>

					<!-- filter  ----------------------->
					<ul class="project-filter">
						<li class="list project-filter-active" data-filter="all">All</li>
						<li class="list" data-filter="app">Application</li>
						<li class="list" data-filter="design">App Design</li>
						<li class="list" data-filter="web">Website Design</li>
						<li class="list" data-filter="ai">AI</li>
					</ul>

					<!-- container  ----------------------->
					<div class="project-container">

						<!-- box-1 (about-app) ----------------------->
						<a class="project-box app" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg" alt="work">
						</a>

						<!-- box-2 (about-website) ----------------------->
						<a class="project-box web" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg" alt="work">
						</a>

						<!-- box-3 (about-ai) ----------------------->
						<a class="project-box ai" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg" alt="work">
						</a>

						<!-- box-4 (about-design) ----------------------->
						<a class="project-box design" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="work">
						</a>

						<!-- box-5 (about-design) ----------------------->
						<a class="project-box design" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="work">
						</a>

						<!-- box-6 (about-app) ----------------------->
						<a class="project-box app" data-lightbox="work" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg">
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="work">
						</a>

					</div>

					<div id="loadMore">Load more</div>

				</section>



				<hr  />




				<section class="box--right-aligned">
					<article class="wrapper">
						<img class="img--project-overview-right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/30370843820_b14aa5d064_o_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 1</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<img class="img--project-overview-left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39464746535_2bcc63c4c1_o_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 2</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<img class="img--project-overview-right-aligned" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 3</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--left-aligned">
					<article class="wrapper">
						<img class="img--project-overview-left-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/39651287294_14b3c2e283_o_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 4</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<section class="box--right-aligned">
					<article class="wrapper">
						<img class="img--project-overview-right-aligned lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="Platzhalter-Bild">
						<h2 class="h2__heading">Musterprojekt 5</h2>
						<p class="h2__subheading">Ort - Datum</p>
						<div class="">
							<p class="">
								Hier kommt eine kurze Beschreibung, Zusammenfassung oder irgendetwas das die Aufmerksamkeit fängt hin.
							</p>
						</div>
					</article>
				</section>

				<hr  />

				<section>
					<div class="project-carousel-center">
						<div><img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="Platzhalter-Bild"></div>
						<div><img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="Platzhalter-Bild"></div>
						<div><img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="Platzhalter-Bild"></div>
						<div><img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/DSC01559-2_web.jpg" alt="Platzhalter-Bild"></div>
						<div><img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="Platzhalter-Bild"></div>
						<div><img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/Koch 1_web.jpg" alt="Platzhalter-Bild"></div>
					</div>
				</section>

				<hr  />



				<section class="box--left-aligned">
					<btn>Weitere Projekte laden (LAZY LOAD)</btn>
					<img class="lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/tischlerei/projekte/parapatits-tischlerei_komp-38-DSC03459_web.jpg" alt="Platzhalter-Bild">
				</section>

				<section class="wrapper">
					<h2 class="h2__heading">Häufig gestellte Fragen</h2>
					<div class="">
						Fragen, welche wir schon mehr als einmal beantworten durften.
						<btn>fragen anzeigen</btn>
					</div>
				</section>

				<?php echo do_shortcode("[shortcode_recall]"); ?>

			</div>
		</main>

	<?php get_footer(); ?>
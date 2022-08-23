<!DOCTYPE html>
<html lang='de'>
	<head>
		<!-- Meta Data -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="content-type" content="text/html; charset=macintosh" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scaleable=no">

		<!-- === FAVICONS === -->

		<!-- Default -->
		<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon.svg" type="image/x-icon">
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon.ico" type="image/x-icon">

		<!-- PNG icons with different sizes -->
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16">

		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-180x180.png">
		<link rel="apple-touch-icon" sizes="192x192" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/apple-touch-icon-192x192.png">

		<!-- Apple macOS Safari Mask Icon -->
		<link rel="mask-icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/favicon.svg" color="#B6274F">

		<!-- Apple iOS Safari Theme -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#B6274F">
		<meta name="apple-mobile-web-app-title" content="Website Parapatits Peter - Tischlerei & Bestattung">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Microsoft Windows Tiles -->
		<meta name="theme-color" content="#707173">
		<meta name="msapplication-navbutton-color" content="#B6274F">
		<meta name="msapplication-TileColor" content="#838282">
		<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/windows-tile-icon-144x144.png">
		<meta name="application-name" content="Website Parapatits Peter - Tischlerei & Bestattung">

		<!-- Internet Explorer 11 Tiles -->
		<meta name="msapplication-square70x70logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-70x70.png">
		<meta name="msapplication-square150x150logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-150x150.png">
		<meta name="msapplication-wide310x150logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-310x150.png">
		<meta name="msapplication-square310x310logo" content="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon/ms-ie11-icon-310x310.png">

		<!-- Open Graph -->
		<meta property="og:title" content="Parapatits Peter - Tischlerei & Bestattung">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.parapatits.at">
		<meta property="og:image" content="og_image_url">
		<meta property="og:site_name" content="Parapatits Peter">
		<meta property="og:locale" content="de_AT">

		<!-- Site Title -->
		<?php if (is_front_page() ) : ?>
			<title>Startseite | <?php bloginfo( 'name' ); ?></title>
		<?php else : ?>
			<title><?php wp_title($sep = ''); ?> | <?php bloginfo( 'name' ); ?></title>
		<?php endif; ?>

		<?php wp_enqueue_script('jquery'); ?>

		<?php wp_head(); ?>

	</head>

	<body class="site-body <?php body_class(); ?>">

		<header class="site-header">
			<div class="site-header__branding">
				<div class="site-header__logo">
					<a class="header-logo__link wrapper" href="<?php echo get_home_url(); ?>">
						<img class="site-header__logo-img lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logos/logo-tischlerei-parapatits.svg" alt="Logo Tischlerei Paraptits">
					</a>
				</div>
			</div>

			<!-- Hamburger Menu Toggle -->
			<nav class="main-navigation">

				<menu class="site-menu">
					<div class="burger-menu">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</menu>

				<!--
				<div class="navbar">
					<ul class="navbar__navigation-list">
						<li class="navbar-item navbar-item--submenu-button"><a href="/tischlerei.html">Tischlerei</a>
							<ul class="navbar-item__submenu">
								<li class="navbar-item"><a href="unsere-werte.html">Unsere Werte</a></li>
								<li class="navbar-item"><a href="projekte.html">Projekte</a></li>
								<li class="navbar-item"><a href="haeufig-gestellte-fragen.html">Häufig gestellte Fragen</a>
							</ul>
						</li>
						<li class="navbar-item navbar-item--submenu-button"><a href="/bestattung.html">Bestattung</a>
							<ul class="navbar-item__submenu">
								<li class="navbar-item"><a href="leitfaden-im-todesfall.html">Leitfaden im Todesfall</a></li>
								<li class="navbar-item"><a href="unsere-leistungen.html">Unsere Leistungen</a></li>
								<li class="navbar-item"><a href="haeufig-gestellte-fragen.html">Häufig gestellte Fragen</a></li>
							</ul>
						</li>
						<li class="navbar-item"><a href="/ueber-uns.html">Über uns</a></li>
						<li class="navbar-item"><a href="/kontakt.html">Kontakt</a></li>
						<li class="navbar-item"><a href="/jobs.html">Jobs</a></li>
					</ul>
				</div>
				-->

				<!-- Main Navigation -->
				<div class="navbar">
					<ul class="navbar__navigation-list">
						<?php
							$defaults = array(
								'walker'         => new Custom_Navwalker(),
								'menu'           => 'Hauptnavigation',
								'theme_location' => 'nav-menu-main',
								'depth'          => 2,
								'container'      => FALSE,
								'container_class'   => '',
								'menu_class'     => '',
								'items_wrap'     => '%3$s',
								'fallback_cb'		=>	'NavWalker::fallback'
							);
							wp_nav_menu( $defaults );
						?>
					</ul>
				</div>

			</nav>

		</div>

	</header>

	<?php if (is_front_page() ) : ?>

<!-- 	<section class="large-hero">
		<img class="large-hero__img lazyload" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/hero-home.png" alt="Hero Image">
		<p class="large-hero__title wrapper">Willkommen, hereinspaziert</p>
		<p class="large-hero__text wrapper"></p>
	</section> -->

	<section>
		<div class="home-slider">
			<div>
				<picture>
					<source media="(min-width: 38em)" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits-tischlerei_highres-6-DSC03181_web.jpg">
					<source srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits_highres-1-DSC03181_web.jpg">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits_highres-1-DSC03181_web.jpg" alt="">
				</picture>
				<p class="home-slider__text"><span class="higlight-me">Herzlich</span> - Verlässlich - Echt</p>
			</div>
			<div>
				<picture>
					<source media="(min-width: 38em)" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits-tischlerei_komp-21-DSC03276_web.jpg">
					<source srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits_highres-2-DSC03276_web.jpg">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits_highres-2-DSC03276_web.jpg" alt="">
				</picture>
				<p class="home-slider__text">Herzlich - <span class="higlight-me">Verlässlich</span> - Echt</p>
			</div>
			<div>
				<picture>
					<source media="(min-width: 38em)" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits-tischlerei_komp-50-DSC03548_web.jpg">
					<source srcset="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits_highres-3-DSC03548_web.jpg">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/home/slider/parapatits_highres-3-DSC03548_web.jpg" alt="">
				</picture>
				<p class="home-slider__text">Herzlich - Verlässlich - <span class="higlight-me">Echt</span></p>
			</div>
		</div>
	</section>


	<?php endif; ?>
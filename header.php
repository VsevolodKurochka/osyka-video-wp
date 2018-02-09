<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package videooperator
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000000">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="fixed fixed_md-top">
		<div class="nav nav_style" id="js-navigation">
			<div class="nav__container container">
				<div class="nav__row row">
					<div class="nav__logo col-8 col-md-3">
						<button class="hamburger hamburger_effect-2" type="button" id="js-nav-hamburger"><span class="hamburger__lines"><span></span><span></span><span></span><span></span></span>
						</button>
						<div class="nav__logo-content">
							<p class="nav__logo-content-text"><span>Oleksii</span> Osyka</p>
						</div>
					</div>
					<nav class="nav__menu col-12 col-md-10" id="js-navigation-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
					<div class="nav__addition col-4 col-md-2" id="js-nav-addition">
						<ul class="social social_white">
							<li class="social__item"><a class="social__item-link" href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="social__item"><a class="social__item-link" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="page" class="site">
		<header class="header header_full header_background">
			<div class="header__video">
				<iframe class="header__video-iframe" src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&amp;showinfo=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen="allowfullscreen">
				</iframe>
			</div>
			<div class="header__container container">
				<h1 class="header__title header__title_big"><strong>Oleksii</strong> Osyka</h1>
				<h2 class="header__subtitle">DP, Cinematographer, Director, Cameraman</h2>
				<button class="btn btn_border-white effect effect_bounce-top">Contact Me</button>
			</div>
		</header>

		<div id="content" class="site-content">
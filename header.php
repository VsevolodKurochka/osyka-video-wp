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
					<div class="nav__logo col-8 col-md-2">
						<button class="hamburger hamburger_effect-2" type="button" id="js-nav-hamburger"><span class="hamburger__lines"><span></span><span></span><span></span><span></span></span>
						</button>
						<div class="nav__logo-content">
							<a href="<?php echo site_url(); ?>" class="nav__logo-content-text"><span>Oleksii</span> Osyka</a>
						</div>
					</div>
					<nav class="nav__menu col-12 col-md-8" id="js-navigation-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
					<div class="nav__addition col-4 col-md-2" id="js-nav-addition">
						<?php social('social_white') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="page" class="site">
		<?php
			if( is_page_template('template-main.php') ) : 
				$header_class = 'header_full';
			else:
				$header_class = 'header_small';
			endif;
		?>
		<header class="header header_background <?php echo $header_class; ?>">
			
			<?php if( is_page_template('template-main.php') || is_404()) : ?>
				<?php $youtube_link = get_option('contact_info_setting') ?>
				<div class="header__video">
					<iframe class="header__video-iframe" src="https://www.youtube.com/embed/<?php echo $youtube_link['video']; ?>?controls=0&amp;showinfo=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;mute=1" frameborder="0" allowfullscreen="allowfullscreen">
					</iframe>
				</div>
			<?php	else: ?>

				<?php
					if( has_post_thumbnail() ) : 

						echo the_post_thumbnail('full', array('class'=> 'header__image'));

					else:

						echo '<img class="header__image" src="'.get_template_directory_uri().'/img/music.jpg" alt="">';

					endif;
				?>
				
			<?php endif; ?>
			<div class="header__container container">
				<h1 class="header__title header__title_big">
					<?php

					if( get_field('title') ) :

						the_field('title');

					elseif( is_post_type_archive() ) :

						post_type_archive_title();

					elseif( is_404() ) :

						_e('<strong>404</strong>');

					else:
						the_title();

					endif;
					?>
				</h1>
				
				<h2 class="header__subtitle">
					<?php

						if( get_field('subtitle') ) :

							the_field('subtitle');

						elseif( is_post_type_archive() ) :

							the_archive_description();

						elseif( is_404() ) :

							_e('This page was not found.');

						// else:
						// 	the_title();

						endif;
					?>
				</h2>

				<?php if(get_field('button_header')) :?>
					<button class="btn btn_border-white effect effect_bounce-top"><?php the_field('button_header'); ?></button>
				<?php endif; ?>
			</div>
		</header>

		<div id="content" class="site-content">
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package videooperator
 */

get_header(); ?>
	
	<section class="archive">
		<div class="flex">
			<?php
			if ( have_posts() ) : ?>

				<?php
				$increment = 0;
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					gallery_default($increment);

					$increment++;

				endwhile; ?>
			
		</div>
			<?php

				wp_pagenavi();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
	</section>

<?php
get_footer();
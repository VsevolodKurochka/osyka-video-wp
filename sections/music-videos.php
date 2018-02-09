<?php
	
	$gallery_name = 'music_videos';

	//print_r(get_post_type_object( 'music_videos' ));
	
	$music_videos_object = get_post_type_object( $gallery_name );

	$args = array(
		'post_type'   		=> $gallery_name,
		'post_status' 		=> 'publish',
		'posts_per_page'	=> 4
	);

	$music_videos = new WP_Query( $args );

	if( $music_videos->have_posts() && get_field('show_music_section') ) :
?>
<section class="gallery">
	<div class="container">
		<div class="group group_inline">
			<h3 class="group__title"><?php the_field('music_section_title') ?></h3>
			<p class="group__description"><?php echo $music_videos_object->description; ?></p>
		</div>
	</div>
	<div class="gallery__row flex">
		<?php
			$increment = 0;
			while( $music_videos->have_posts() ) : 
				$music_videos->the_post();

				if($increment == 0) :
					gallery_fluid();
				else:
					gallery_default($increment);
				endif;

				$increment++;
      endwhile;
      wp_reset_postdata();
		?>
		
	</div>
	<div class="gallery__footer"><a class="btn btn_border-brand-2 effect effect_bounce-top" href="<?php echo get_post_type_archive_link($gallery_name); ?>">View More</a></div>
</section>
<?php endif; ?>
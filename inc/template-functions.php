<?php

function gallery_section($post_type_name){
	$args = array(
		'post_type'   		=> $post_type_name,
		'post_status' 		=> 'publish',
		'posts_per_page'	=> 4
	);

	$post_type_object = get_post_type_object( $post_type_name );

	$post_type_query = new WP_Query( $args );

	if( $post_type_query->have_posts() && get_field($post_type_name . '_show') ) : 

?>
<section class="gallery">
	<div class="container">
		<div class="group group_inline">
			<h3 class="group__title"><?php the_field($post_type_name . '_title') ?></h3>
			<p class="group__description"><?php echo $post_type_object->description; ?></p>
		</div>
	</div>
	<div class="gallery__row flex">
		<?php
			$increment = 0;
			while( $post_type_query->have_posts() ) : 
				$post_type_query->the_post();

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
	<div class="gallery__footer"><a class="btn btn_border-brand-2 effect effect_bounce-top" href="<?php echo get_post_type_archive_link($post_type_name); ?>">View More</a></div>
</section>
	
<?php
	endif;
}

function gallery_default($increment){
	$return = '<div class="gallery__item gallery__item_default">
	<a class="gallery__item-link" data-action="modal" data-video="https://www.youtube.com/embed/'.get_field('project_video').'?rel=0&amp;amp;showinfo=0&amp;amp;autoplay=1" data-open="#modal-music-video-'.$increment.'"></a>
	<img class="gallery__item-background" src="'.get_field('project_image').'" alt="" role="presentation"/>
	<div class="gallery__item-content">
		<p class="gallery__item-content-title">'.get_the_title().'</p>
		<p class="gallery__item-content-link"><i class="gallery__item-content-link-icon"></i><span class="gallery__item-content-link-text">Click here for details</span>
		</p>
	</div>
	<div class="modal" id="modal-music-video-'.$increment.'">
		<div class="modal__box modal__box_medium container">
			<div class="modal__header">
				<p class="modal__title">'.get_the_title().'</p>
				<button class="modal__close" data-close="modal">&times;
				</button>
			</div>
			<div class="modal__video">
			</div>
			<div class="modal__body">
				<div class="row">
					<div class="modal__body-column col-12 col-sm-7">
						<p class="modal__body-title">Project details</p>
						<div class="modal__body-content">
							'.get_field('project_description').'
						</div>
					</div>
					<div class="modal__body-column col-12 col-sm-5">
						<p class="modal__body-title">What was used
						</p>
						<div class="modal__body-content">
							'.get_field('project_used').'
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
echo $return;
}

function gallery_fluid(){
	$return = '<div class="gallery__item gallery__item_fluid">
		<iframe class="gallery__item-video" src="https://www.youtube.com/embed/'.get_field('project_video').'?rel=0&amp;ampshowinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen">
		</iframe>
	</div>';

	echo $return;
}

function social($mod){
	$info = get_option('contact_info_setting');
	$return = '<ul class="social '.$mod.'">
							<li class="social__item"><a class="social__item-link" href="'.$info['facebook'].'"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="social__item"><a class="social__item-link" href="'.$info['instagram'].'"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>';

	echo $return;
}
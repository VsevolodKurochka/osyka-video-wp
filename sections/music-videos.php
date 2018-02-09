<?php
	//print_r(get_post_type_object( 'music_videos' ));
	$music_videos_object = get_post_type_object( 'music_videos' );

	$args = array(
		'post_type'   => 'music_videos',
		'post_status' => 'publish'
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
		<div class="gallery__item gallery__item_fluid">
			<iframe class="gallery__item-video" src="https://www.youtube.com/embed/6v2L2UGZJAM?rel=0&amp;ampshowinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen">
			</iframe>
		</div>
		<div class="gallery__item gallery__item_default"><a class="gallery__item-link" data-action="modal" data-video="https://www.youtube.com/embed/6v2L2UGZJAM?rel=0&amp;amp;showinfo=0&amp;amp;autoplay=1" data-open="#modal-music-video-1"></a><img class="gallery__item-background" src="img/item-1.jpg" alt="" role="presentation"/>
			<div class="gallery__item-content">
				<p class="gallery__item-content-title">Jhonson &amp; Jhonson
				</p>
				<p class="gallery__item-content-link"><i class="gallery__item-content-link-icon"></i><span class="gallery__item-content-link-text">Click here for details</span>
				</p>
			</div>
			<div class="modal" id="modal-music-video-1">
				<div class="modal__box modal__box_medium container">
					<div class="modal__header">
						<p class="modal__title">Jhonson &amp; Jhonson
						</p>
						<button class="modal__close" data-close="modal">&times;
						</button>
					</div>
					<div class="modal__video">
					</div>
					<div class="modal__body">
						<div class="row">
							<div class="modal__body-column col-12 col-sm-7">
								<p class="modal__body-title">Project details
								</p>
								<div class="modal__body-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="modal__body-column col-12 col-sm-5">
								<p class="modal__body-title">What was used
								</p>
								<div class="modal__body-content">
									<ul>
										<li>Test</li>
										<li>Test</li>
										<li>Test</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gallery__footer"><a class="btn btn_border-brand-2 effect effect_bounce-top" href="#">View more</a></div>
</section>
<?php endif; ?>